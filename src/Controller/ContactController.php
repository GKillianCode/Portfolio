<?php

namespace App\Controller;

use App\DTO\ContactDTO;
use App\Form\ContactType;
use App\Service\ContactMailerService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ContactController extends AbstractController
{
    public function __construct(
        private ContactMailerService $mailer
    ) {}

    #[Route('/contact', name: 'app_contact', methods: ['POST'])]
    public function submit(Request $request): Response
    {
        $contact = new ContactDTO();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $success = $this->mailer->sendContactEmail($contact);
            $this->addFlash(
                $success ? 'success' : 'error',
                $success
                    ? 'Message envoyé avec succès !'
                    : 'Erreur lors de l\'envoi. Veuillez réessayer.'
            );
        } else {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        $referer = $request->headers->get('referer');
        return $this->redirect(
            $this->generateUrl('home_index') . '#contact'
        );
    }

    public function renderForm(): Response
    {
        $contact = new ContactDTO();
        $form = $this->createForm(ContactType::class, $contact, [
            'action' => $this->generateUrl('app_contact'),
            'method' => 'POST'
        ]);

        return $this->render('partials/_contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
