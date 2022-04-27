<?php

namespace App\Repository;

use App\Entity\Avis;
use App\Entity\Repavis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Avis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avis[]    findAll()
 * @method Avis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avis::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Avis $entity, bool $flush = true): void
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
    public function remove(Avis $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }




    public function findOneByid($value): ?Avis
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.idavis = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findByUser($value)
    {
        return $this->createQueryBuilder('u')
            ->join('u.idcategorie', 'r')
            ->join('u.idrep','x')
            ->where('r.nomcategorie LIKE :val2')
            ->orWhere('x.etat LIKE :val')

            ->setParameters(array('val'=> $value.'%', 'val2' => $value))
            ->orderBy('u.numeroutilisateur', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }
    public function findByUser2($value)
    {
        return $this->createQueryBuilder('u')
            ->join('u.numeroutilisateur', 'r')
            ->join('u.idcategorie', 'c')
            ->where('r.nomclient LIKE :val')
            ->orWhere('r.nomclient LIKE :val2')

//            ->setParameter('val', '%'.$value.'%' )
//            ->setParameter('val2', $value.'%','%'.$value.'%')
            ->setParameters(array('val'=> '%'.$value.'%', 'val2' => $value.'%'))
            ->orderBy('c.nomcategorie', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }
    public function findByUser3($value)
    {
        return $this->createQueryBuilder('u')
            ->join('u.idrep', 'r')
            ->where('r.etat LIKE :val')
            ->setParameter('val', $value.'%' )
            ->orderBy('u.numeroutilisateur', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }


    public function update($idrep,$idavis)
    {
$updateEtat = $this->createQueryBuilder('r')
->update(Avis::class, 'r')
->set('r.idrep', '?1')
->where('r.idavis  = ?2')
->setParameter(1, $idrep)
->setParameter(2, $idavis)
->getQuery();
dump($updateEtat);
$updateEtat->execute();
}



}
