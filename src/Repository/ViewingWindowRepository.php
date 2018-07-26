<?php

namespace App\Repository;

use App\Entity\ViewingWindow;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ViewingWindow|null find($id, $lockMode = null, $lockVersion = null)
 * @method ViewingWindow|null findOneBy(array $criteria, array $orderBy = null)
 * @method ViewingWindow[]    findAll()
 * @method ViewingWindow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ViewingWindowRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ViewingWindow::class);
    }

//    /**
//     * @return ViewingWindow[] Returns an array of ViewingWindow objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ViewingWindow
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
