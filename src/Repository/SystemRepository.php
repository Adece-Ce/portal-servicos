<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\System;
use App\Repository\Interface\SystemRepositoryInterface;
use Doctrine\Persistence\ManagerRegistry;

class SystemRepository extends AbstractRepository implements SystemRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, System::class);
    }

    public function save(System $system): System
    {
        $this->getEntityManager()->persist($system);
        $this->getEntityManager()->flush();

        return $system;
    }
}
