<?php

namespace App\Repository;

use App\Entity\ProjectKind;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProjectKind>
 *
 * @method ProjectKind|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectKind|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectKind[]    findAll()
 * @method ProjectKind[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectKindRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectKind::class);
    }

//    /**
//     * @return ProjectKind[] Returns an array of ProjectKind objects
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

//    public function findOneBySomeField($value): ?ProjectKind
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
