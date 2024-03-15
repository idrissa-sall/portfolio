<?php

namespace App\Repository;

use App\Entity\SchoolCourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SchoolCourse>
 *
 * @method SchoolCourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method SchoolCourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method SchoolCourse[]    findAll()
 * @method SchoolCourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SchoolCourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SchoolCourse::class);
    }

//    /**
//     * @return SchoolCourse[] Returns an array of SchoolCourse objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SchoolCourse
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
