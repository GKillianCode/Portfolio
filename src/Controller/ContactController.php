<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]

    public function submit(): Response
    {
        $form = $this->createForm(ContactType::class);

        return new Response("");
    }

    public function renderForm(): Response
    {
        $form = $this->createForm(ContactType::class);

        return $this->render('partials/_contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
