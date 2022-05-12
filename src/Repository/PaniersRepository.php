<?php

namespace App\Repository;

use App\Entity\Paniers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Paniers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paniers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paniers[]    findAll()
 * @method Paniers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaniersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paniers::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Paniers $entity, bool $flush = true): void
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
    public function remove(Paniers $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Paniers[] Returns an array of Paniers objects
    //  */

    public function findByuserid($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.numeroutilisateur = :val')
            ->setParameter('val', $value)
            ->orderBy('p.dateajout', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Paniers
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
