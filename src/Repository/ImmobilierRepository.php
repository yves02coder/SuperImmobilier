<?php

namespace App\Repository;

use App\Entity\Immobilier;
use App\Entity\ImmobilierSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Immobilier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Immobilier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Immobilier[]    findAll(ImmobilierSearch $search)
 * @method Immobilier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImmobilierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Immobilier::class);
    }

    /**
     * @return void

   /* public function search($mots){
        $query=$this->createQueryBuilder('p');
        if ($mots !=null){
            $query->andWhere('MATCH_AGAINST(p.title, p.description) AGAINST(:mots boolean)>0')
                ->setParameter('mots', $mots);
        }
        return $query->getQuery()->getResult();
    }*/

    // /**
    //  * @return Immobilier[] Returns an array of Immobilier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Immobilier
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
