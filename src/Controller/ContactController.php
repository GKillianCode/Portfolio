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

            // Nettoyage de la session en cas de succès
            $request->getSession()->remove('contact_form_data');
            $request->getSession()->remove('contact_form_errors');
        } else {
            // Sauvegarde des données du formulaire dans la session
            $formData = [
                'fullName' => $contact->fullName,
                'company' => $contact->company,
                'email' => $contact->email,
                'message' => $contact->message,
            ];
            $request->getSession()->set('contact_form_data', $formData);

            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }
            $request->getSession()->set('contact_form_errors', $errors);

            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }

            if (empty($errors)) {
                $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
            }
        }

        return $this->redirect(
            $this->generateUrl('home_index') . '#contact'
        );
    }

    public function renderForm(): Response
    {
        $contact = new ContactDTO();

        $session = $this->container->get('request_stack')->getCurrentRequest()->getSession();
        $formData = $session->get('contact_form_data', []);

        if (!empty($formData)) {
            $contact->fullName = htmlspecialchars($formData['fullName'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?? null;
            $contact->company = htmlspecialchars($formData['company'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?? null;
            $contact->email = htmlspecialchars($formData['email'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?? null;
            $contact->message = htmlspecialchars($formData['message'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?? null;

            $session->remove('contact_form_data');
            $session->remove('contact_form_errors');
        }

        $form = $this->createForm(ContactType::class, $contact, [
            'action' => $this->generateUrl('app_contact'),
            'method' => 'POST'
        ]);

        return $this->render('partials/_contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
