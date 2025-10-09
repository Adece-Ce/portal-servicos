<?php

declare(strict_types=1);

namespace App\Repository\Interface;

use App\Entity\Permission;

interface PermissionRepositoryInterface
{
    public function save(Permission $permission): Permission;
}
