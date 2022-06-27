<?php

namespace mymodule\Repository;

use mymodule\Entity\PDACustomer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

// class PDACustomerRepository extends ServiceEntityRepository
// {
//     public function __construct(ManagerRegistry $registry)
//     {
//         parent::__construct($registry, PDACustomer::class);
//     }

//     /**
//      * @return PDACustomer[]
//      */
//     public function findAllBySocId(int $socid): array
//     {
//         $entityManager = $this->getEntityManager();

//         $query = $entityManager->createQuery(
//             'SELECT p
//             FROM mymodule\Entity\PDACustomer p
//             WHERE p.socid_dolibarr = :socid
//             ORDER BY p.name DESC'
//         )->setParameter('socid', $socid);

//         // returns an array of Product objects
//         return $query->getResult();
//     }
// }