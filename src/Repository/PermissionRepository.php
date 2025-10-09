<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Permission;
use App\Repository\Interface\PermissionRepositoryInterface;
use Doctrine\Persistence\ManagerRegistry;

class PermissionRepository extends AbstractRepository implements PermissionRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Permission::class);
    }

    public function save(Permission $permission): Permission
    {
        $this->getEntityManager()->persist($permission);
        $this->getEntityManager()->flush();

        return $permission;
    }
}
