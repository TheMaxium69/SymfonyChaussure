<?php

namespace App\Controller;

use App\Repository\ChaussureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChaussureController extends AbstractController
{
    /**
     * @Route("/chaussure", name="chaussure")
     */
    public function index(ChaussureRepository $RepoChaussure): Response
    {
        $Chaussures = $RepoChaussure->findAll();
        return $this->json($Chaussures);
    }
}
