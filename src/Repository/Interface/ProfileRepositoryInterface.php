<?php

declare(strict_types=1);

namespace App\Repository\Interface;

use App\Entity\Profile;

Interface ProfileRepositoryInterface
{
    public function save(Profile $profile): Profile;
}
