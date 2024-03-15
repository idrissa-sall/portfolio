<?php

namespace App\Repository;

use App\Entity\ProMission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProMission>
 *
 * @method ProMission|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProMission|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProMission[]    findAll()
 * @method ProMission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProMissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProMission::class);
    }

//    /**
//     * @return ProMission[] Returns an array of ProMission objects
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

//    public function findOneBySomeField($value): ?ProMission
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
