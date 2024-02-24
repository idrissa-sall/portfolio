<?php

namespace App\Repository;

use App\Entity\LibraryCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LibraryCategory>
 *
 * @method LibraryCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibraryCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibraryCategory[]    findAll()
 * @method LibraryCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibraryCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LibraryCategory::class);
    }

//    /**
//     * @return LibraryCategory[] Returns an array of LibraryCategory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LibraryCategory
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
