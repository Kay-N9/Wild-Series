<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Attribute\Route;

Class HomeController extends AbstractController
{
    #[Route('/', name: 'Home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'website' => 'Wild Series',
         ]);
    }


}