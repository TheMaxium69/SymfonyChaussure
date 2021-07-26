<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChaussureController extends AbstractController
{
    /**
     * @Route("/chaussure", name="chaussure")
     */
    public function index(): Response
    {
        return $this->json("Premier Retour");
    }
}
