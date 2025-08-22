<?php

namespace App\Controller;

use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SecurityController extends AbstractController
{
    #[Route('/security/login', name: 'security_login')]
    public function login(): Response
    {
        $form = $this->createForm(LoginType::class);
        return $this->render('security/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
