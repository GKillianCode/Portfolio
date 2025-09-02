<?php

namespace App\Controller;

use App\DTO\ContactDTO;
use App\Form\ContactType;
use App\Service\ContactMailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

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

        // Pour les requêtes AJAX
        if ($request->isXmlHttpRequest()) {
            if ($form->isSubmitted() && $form->isValid()) {
                $success = $this->mailer->sendContactEmail($contact);

                if ($success) {
                    return new JsonResponse([
                        'success' => true,
                        'message' => 'Message envoyé avec succès ! Je vous répondrai rapidement.'
                    ]);
                }

                return new JsonResponse([
                    'success' => false,
                    'message' => 'Erreur lors de l\'envoi. Veuillez réessayer ou me contacter directement par email.'
                ], 500);
            }

            // Récupération des erreurs
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $field = $error->getOrigin()->getName();
                $errors[$field] = $error->getMessage();
            }

            return new JsonResponse([
                'success' => false,
                'errors' => $errors
            ], 400);
        }

        // Fallback pour requêtes non-AJAX
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

        // Redirection vers la page précédente
        $referer = $request->headers->get('referer');
        return $this->redirect($referer ?: $this->generateUrl('app_home'));
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
