<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="acceuil", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig');
    }

    
}
