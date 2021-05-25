<?php

namespace App\Controller;

use App\Entity\Property;
use App\Form\PropertyType;
use App\Form\ResearchType;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(Request $request, EntityManagerInterface $entityManager, PropertyRepository $propertyRepository): Response
    {
        $research = new \Research();
        $researchForm = $this->createForm(ResearchType::class, $research);

        $researchForm->handleRequest($request);

        if ($researchForm->isSubmitted() && $researchForm->isValid()) {
           dd($research);
        }
        $properties = $propertyRepository->findAllOrderByDate();
        return $this->render('property/list.html.twig', [
            'researchForm' => $researchForm->createView(),
            'properties' => $properties
        ]);
    }

    /**
     * @Route("/property/detail/{id}", name="property_detail")
     */
    public
    function detail($id, PropertyRepository $propertyRepository): Response
    {
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
    function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $property = new Property();
        $propertyForm = $this->createForm(PropertyType::class, $property);
        $property->setPublishedDate(new \DateTime())
            ->setImg('house_3.jpg'); // a défaut de mettre une img personnalisée, je mets celle-ci

        $propertyForm->handleRequest($request);

        if ($propertyForm->isSubmitted() && $propertyForm->isValid()) {
            $entityManager->persist($property);
            $entityManager->flush();
            //message flash :
            $this->addFlash('success', 'Congrats, your property has been added');
            return $this->redirectToRoute('property_detail', ['id' => $property->getId()]);
        }
        return $this->render('property/create.html.twig', [
            'createPropertyForm' => $propertyForm->createView()
        ]);
    }
}
