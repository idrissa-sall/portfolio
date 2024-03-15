<?php

namespace App\Repository;

use App\Entity\SkillKind;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SkillKind>
 *
 * @method SkillKind|null find($id, $lockMode = null, $lockVersion = null)
 * @method SkillKind|null findOneBy(array $criteria, array $orderBy = null)
 * @method SkillKind[]    findAll()
 * @method SkillKind[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillKindRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SkillKind::class);
    }

//    /**
//     * @return SkillKind[] Returns an array of SkillKind objects
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

//    public function findOneBySomeField($value): ?SkillKind
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
