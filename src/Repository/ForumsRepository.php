<?php

namespace App\Repository;

use App\Entity\Forums;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Forums|null find($id, $lockMode = null, $lockVersion = null)
 * @method Forums|null findOneBy(array $criteria, array $orderBy = null)
 * @method Forums[]    findAll()
 * @method Forums[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Forums::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Forums $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Forums $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByUser($value)
    {
        return $this->createQueryBuilder('u')
//            ->join('u.idforum', 'r')
//            ->where('r.sujetforum LIKE :val')
            ->where('u.sujetforum LIKE :val')
            ->setParameter('val', $value.'%')
            ->orderBy('u.idforum', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }





    // /**
    //  * @return Forums[] Returns an array of Forums objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Forums
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
