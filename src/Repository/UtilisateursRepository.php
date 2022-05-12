<?php

namespace App\Repository;

use App\Entity\Utilisateurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Utilisateurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilisateurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilisateurs[]    findAll()
 * @method Utilisateurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateurs::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Utilisateurs $entity, bool $flush = true): void
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
    public function remove(Utilisateurs $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

     /**
      * @return Utilisateurs[] Returns an array of Utilisateurs objects
      */
    public function findByUsername($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.nomclient LIKE :val')
            ->orWhere('u.nomadmin LIKE :val')
            ->setParameter('val', $value.'%')
            ->orderBy('u.numeroutilisateurs', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    /**
     * @return Utilisateurs[] Returns an array of Utilisateurs objects
     */
    public function findAlltri()
    {
        return $this->createQueryBuilder('u')
            ->orderBy('u.dateinscription', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findOneByUsername($value): ?Utilisateurs
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.nomclient= :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
