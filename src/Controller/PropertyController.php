<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(EntityManagerInterface $entityManager, PropertyRepository $propertyRepository): Response
    {
        // test création d'une nouvelle propriete :
        $newProperty = new Property();
        $newProperty->setAddress('8, rue du Quinquont, 26000 Valence')
        ->setGarage(false)
        ->setOutsides(false)
        ->setPool(false)
        ->setType('house')
        ->setSurface(80)
        ->setSaleOrRent('rent')
        ->setPrice(900)
        ->setRoom(5)
        ->setPublishedDate(new \DateTime())
        ->setImg('apartment_1.jpg');

        // $entityManager->persist($newProperty);
        // $entityManager->flush();

        ///////////////////////////////
        ///
        $properties = $propertyRepository->findAll();

        return $this->render('property/list.html.twig', [
            'properties' => $properties,
        ]);
    }

    /**
     * @Route("/property/detail/{id}", name="property_detail")
     */
    public
    function detail($id, PropertyRepository $propertyRepository): Response
    {
        //TODO récupérer la série en fonction de son id
        $property = $propertyRepository->find($id);

        if (!$property) {
            throw $this->createNotFoundException('Oops, this property seems to not exist in our database!');
        }

        return $this->render('property/detail.html.twig', [
            "property" => $property
        ]);
    }

    /**
     * @Route("/property/create", name="property_create")
     */
    public
    function create(): Response
    {
        return $this->render('property/create.html.twig', [
        ]);
    }
}
