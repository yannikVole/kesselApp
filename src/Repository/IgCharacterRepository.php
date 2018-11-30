<?php

namespace App\Repository;

use App\Entity\IgCharacter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method IgCharacter|null find($id, $lockMode = null, $lockVersion = null)
 * @method IgCharacter|null findOneBy(array $criteria, array $orderBy = null)
 * @method IgCharacter[]    findAll()
 * @method IgCharacter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IgCharacterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, IgCharacter::class);
    }

    // /**
    //  * @return IgCharacter[] Returns an array of IgCharacter objects
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
    public function findOneBySomeField($value): ?IgCharacter
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
