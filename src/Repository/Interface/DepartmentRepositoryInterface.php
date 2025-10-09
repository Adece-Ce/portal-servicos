<?php

declare(strict_types=1);

namespace App\Repository\Interface;

use App\Entity\Department;

interface DepartmentRepositoryInterface
{
    public function save(Department $department): Department;
}
