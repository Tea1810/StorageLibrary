<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignUpPageController extends AbstractController
{
    #[Route('/sign/up/page', name: 'app_sign_up_page')]
    public function index(): Response
    {
        return $this->render('sign_up_page/index.html.twig', [
            'controller_name' => 'SignUpPageController',
        ]);
    }
}
