<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController extends AbstractController
{
    /**
     * @Route("/ola", name="ola")
     */
    public function index(): Response
    {
        echo 'Olá mundo';
        exit();
    }
}
