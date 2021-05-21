<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/team", name="main_team")
     */
    public function team(): Response
    {
        return $this->render('main/team.html.twig');
    }

    /**
     * @Route("/contact", name="main_contact")
     */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }

    /**
     * @Route("/pervalert", name="main_pervalert")
     */
    public function perv(): Response
    {
        return $this->render('main/pervalert.html.twig');
    }

}
