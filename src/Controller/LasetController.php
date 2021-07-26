<?php

namespace App\Controller;

use App\Repository\LacetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LasetController extends AbstractController
{
    /**
     * @Route("/lacet", name="lacet")
     */
    public function index(LacetRepository $lacetRepository): Response
    {
        $lacets = $lacetRepository->findAll();

        return $this->json($lacets, 200, [], [
            "groups"=> [
                "lacetsIndex"
            ]
        ]);
    }
}
