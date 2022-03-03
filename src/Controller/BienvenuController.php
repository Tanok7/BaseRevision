<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BienvenuController extends AbstractController
{
    #[Route('/bienvenu', name: 'app_bienvenu')]
    public function index(): Response
    {
        return $this->render('bienvenu/index.html.twig', [
            'controller_name' => 'BienvenuController',
        ]);
    }
}
