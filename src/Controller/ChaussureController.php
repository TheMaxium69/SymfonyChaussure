<?php

namespace App\Controller;

use App\Entity\Chaussure;
use App\Repository\ChaussureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ChaussureController extends AbstractController
{
    /**
     * @Route("/chaussure", name="chaussure")
     */
    public function index(ChaussureRepository $repoChaussure): Response
    {
        $chaussures = $repoChaussure->findAll();

        return $this->json($chaussures, 200, [], [
            "groups"=> [
                "chaussuresIndex"
            ]
        ]);
    }

    /**
     * @Route("/chaussure/show/{id}", name="chaussureShow")
     */
    public function show(Chaussure $chaussure): Response
    {
        return $this->json($chaussure, 200, [], [
            "groups"=> [
                "chaussuresIndex"
            ]
        ]);
    }

    /**
     * @Route("/chaussure/create", name="chaussureCreate", methods={"POST"})
     */
    public function create(Request $request, EntityManagerInterface $manager, SerializerInterface $serializer): Response
    {
        $data = $request->getContent();
        $chaussure = $serializer->deserialize($data, Chaussure::class, 'json');

        $manager->persist($chaussure);
        $manager->flush();

        return $this->json($chaussure);
    }




}
