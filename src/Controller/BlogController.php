<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/Accueil', name: 'app_blog_Accueil')]
    public function Accueil(): Response
    {
        return $this->render('blog/Accueil.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/CV', name: 'app_blog_CV')]
    public function CV(): Response
    {
        return $this->render('blog/CV.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/Pour en savoir plus', name: 'app_blog_Pour en savoir plus')]
    public function plus(): Response
    {
        return $this->render('blog/Pourensavoirplus.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
