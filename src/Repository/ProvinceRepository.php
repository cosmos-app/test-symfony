<?php

namespace App\Repository;

use App\Entity\Province;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Province|null find($id, $lockMode = null, $lockVersion = null)
 * @method Province|null findOneBy(array $criteria, array $orderBy = null)
 * @method Province[]    findAll()
 * @method Province[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProvinceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Province::class);
    }

    /**
     * @param string|null $province
     *
     * @return array|int|string
     */
    public function findForApi(?string $province = null)
    {
        $queryBuilder = $this
            ->createQueryBuilder('province')
            ->select('province, commune')
            ->innerJoin('province.communes', 'commune');

        if ($province) {
            $queryBuilder
                ->where('province.name = :province')
                ->setParameter('province', $province, Types::STRING);
        }

        return $queryBuilder
            ->getQuery()
            ->getArrayResult();
    }
}
