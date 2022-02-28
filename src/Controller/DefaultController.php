<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('default/home.html.twig', []);
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig', []);
    }
    #[Route('/gallery', name: 'gallery')]
    public function posts(): Response
    {
        return $this->render('post/gallery.html.twig', []);
    }
}

