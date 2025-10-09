<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Position;
use App\Repository\Interface\PositionRepositoryInterface;
use Doctrine\Persistence\ManagerRegistry;

class PositionRepository extends AbstractRepository implements PositionRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Position::class);
    }

    public function save(Position $position): Position
    {
        $this->getEntityManager()->persist($position);
        $this->getEntityManager()->flush();

        return $position;
    }
}
