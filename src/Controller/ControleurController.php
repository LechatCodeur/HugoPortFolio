<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ControleurController extends AbstractController{
   
    #[Route('/accueil', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('controleur/accueil.html.twig');
    }
    #[Route('/profil', name: 'profil')]
    public function profil(): Response
    {
        return $this->render('controleur/profil.html.twig');
    }
    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('controleur/portfolio.html.twig');
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('controleur/contact.html.twig');
    }
    #[Route('/choix-parcours', name: 'choix_parcours')]
    public function choixParcours(): Response
    {
        return $this->render('controleur/choix_parcours.html.twig');
    }
}


