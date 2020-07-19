<?php

namespace App\Repository;

use App\Entity\Region;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Region|null find($id, $lockMode = null, $lockVersion = null)
 * @method Region|null findOneBy(array $criteria, array $orderBy = null)
 * @method Region[]    findAll()
 * @method Region[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Region::class);
    }

    /**
     * @param string|null $region
     *
     * @return array|int|string
     */
    public function findForApi(?string $region = null)
    {
        $queryBuilder = $this
            ->createQueryBuilder('region')
            ->select('region, province, commune')
            ->innerJoin('region.provinces', 'province')
            ->innerJoin('province.communes', 'commune');

        if ($region) {
            $queryBuilder
                ->where('region.name = :region')
                ->setParameter('region', $region, Types::STRING);
        }

        return $queryBuilder
            ->getQuery()
            ->getArrayResult();
    }
}
