<?php

namespace App\Repository;

use App\Entity\Carti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Carti>
 *
 * @method Carti|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carti|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carti[]    findAll()
 * @method Carti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carti::class);
    }

//    /**
//     * @return Carti[] Returns an array of Carti objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Carti
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
