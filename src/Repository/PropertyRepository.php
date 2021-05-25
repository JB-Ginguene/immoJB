<?php

namespace App\Repository;

use App\Own\Research;
use App\Entity\Property;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Property|null find($id, $lockMode = null, $lockVersion = null)
 * @method Property|null findOneBy(array $criteria, array $orderBy = null)
 * @method Property[]    findAll()
 * @method Property[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Property::class);
    }

    public function findAllOrderByDate()
    {
        $queryBuilder = $this->createQueryBuilder('p');
        $queryBuilder->addOrderBy('p.publishedDate', 'DESC');
        $query = $queryBuilder->getQuery();
        return $query->getResult();
    }

    public function findByPersonnalResearch(Research $research)
    {
        $queryBuilder = $this->createQueryBuilder('p');


        if ($research->getPriceMin()) {
            $queryBuilder->andWhere('p.price >= ' . $research->getPriceMin());
        }
        if ($research->getPriceMax()) {
            $queryBuilder->andWhere('p.price <= ' . $research->getPriceMax());
        }
        if (in_array('sale', $research->getSaleOrRent())) {
            $queryBuilder->andWhere("p.saleOrRent = 'sale'");
        }
        if (in_array('rent', $research->getSaleOrRent())) {
            $queryBuilder->andWhere("p.saleOrRent = 'rent'");
        }
        if (in_array('house', $research->getType())) {
            $queryBuilder->andWhere("p.type = 'house'");
        }
        if (in_array('apartment', $research->getType())) {
            $queryBuilder->andWhere("p.type = 'apartment'");
        }
        if (in_array('other', $research->getType())) {
            $queryBuilder->andWhere("p.type = 'other'");
        }
        if ($research->getSurfaceMin()) {
            $queryBuilder->andWhere('p.surface >= ' . $research->getSurfaceMin());
        }
        if ($research->getSurfaceMax()) {
            $queryBuilder->andWhere('p.surface <= ' . $research->getSurfaceMax());
        }
        if ($research->getRoomMin()) {
            $queryBuilder->andWhere('p.room >= ' . $research->getRoomMin());
        }
        if ($research->getRoomMax()) {
            $queryBuilder->andWhere('p.room <= ' . $research->getRoomMax());
        }
        if ($research->getAddress()) {
            $queryBuilder->andWhere("p.address LIKE '%" . $research->getAddress() . "%'");
        }
        if (in_array('pool', $research->getSpecificities())) {
            $queryBuilder->andWhere("p.pool = 1");
        }
        if (in_array('garage', $research->getSpecificities())) {
            $queryBuilder->andWhere("p.garage = 1");
        }
        if (in_array('outsides', $research->getSpecificities())) {
            $queryBuilder->andWhere("p.outsides = 1");
        }
        if ($research->getOutsideSurfaceMin()) {
            $queryBuilder->andWhere('p.outsideSurface >= ' . $research->getOutsideSurfaceMin());
        }
        if ($research->getOutsideSurfaceMax()) {
            $queryBuilder->andWhere('p.outsideSurface <= ' . $research->getOutsideSurfaceMax());
        }


            $query = $queryBuilder->getQuery();
            return $query->getResult();
        }
    }
