<?php

namespace App\Controller;

use App\Entity\Chaussure;
use App\Repository\ChaussureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChaussureController extends AbstractController
{
    /**
     * @Route("/chaussure", name="chaussure")
     */
    public function index(ChaussureRepository $repoChaussure): Response
    {
        $chaussures = $repoChaussure->findAll();
        return $this->json($chaussures);
    }

    /**
     * @Route("/chaussure/show/{id}", name="chaussureShow")
     */
    public function show(Chaussure $chaussure): Response
    {
        return $this->json($chaussure);
    }

}
