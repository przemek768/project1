<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainViewController extends AbstractController
{
    #[Route('/', name: 'app_main_view')]
    public function index(Request $request): Response
    {
        $loginForm = $this->createForm(LoginFormType::class);
        $loginForm->handleRequest($request);


        return $this->render('main_view/index.html.twig', [
            'controller_name' => 'MainViewController',
            'loginForm' => $loginForm->createView(),
        ]);
    }
}
