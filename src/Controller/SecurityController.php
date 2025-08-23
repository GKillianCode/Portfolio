<?php

namespace App\Controller;

use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class SecurityController extends AbstractController
{
    #[Route('/security/login', name: 'security_login')]
    public function login(AuthenticationUtils $utils, FormFactoryInterface $factory): Response
    {
        $form = $factory->createNamed('', LoginType::class, ['_username' => $utils->getLastUsername()]);

        return $this->render('security/index.html.twig', [
            'form' => $form->createView(),
            'error' => $utils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/security/logout', name: 'security_logout')]
    public function logout() {}
}
