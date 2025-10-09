<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Department;
use App\Repository\Interface\DepartmentRepositoryInterface;
use Doctrine\Persistence\ManagerRegistry;

class DepartmentRepository extends AbstractRepository implements DepartmentRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Department::class);
    }

    public function save(Department $department): Department
    {
        $this->getEntityManager()->persist($department);
        $this->getEntityManager()->flush();

        return $department;
    }
}
