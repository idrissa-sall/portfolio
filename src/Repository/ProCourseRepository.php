<?php

namespace App\Repository;

use App\Entity\ProCourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProCourse>
 *
 * @method ProCourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProCourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProCourse[]    findAll()
 * @method ProCourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProCourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProCourse::class);
    }

//    /**
//     * @return ProCourse[] Returns an array of ProCourse objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProCourse
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
