<?php

namespace App\Controller;

use App\Entity\Chaussure;
use App\Entity\Lacet;
use App\Repository\LacetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

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

    /**
     * @Route("/lacet/show/{id}", name="lacetShow")
     */
    public function show(Lacet $lacet): Response
    {
        return $this->json($lacet, 200, [], [
            "groups"=> [
                "lacetsIndex"
            ]
        ]);
    }
//
//    /**
//     * @Route("/lacet/create", name="lacetCreate", methods={"POST"})
//     */
//    public function create(Request $request, EntityManagerInterface $manager, SerializerInterface $serializer): Response
//    {
//        $data = $request->getContent();
//        $lacet = $serializer->deserialize($data, Lacet::class, 'json');
//
//        $manager->persist($lacet);
//        $manager->flush();
//
//        return $this->json($lacet);
//    }
}
