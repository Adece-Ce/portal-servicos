<?php

declare(strict_types=1);

namespace App\Repository\Interface;

use App\Entity\System;

interface SystemRepositoryInterface
{
    public function save(System $system): System;
}
