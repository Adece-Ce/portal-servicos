<?php

declare(strict_types=1);

namespace App\Repository\Interface;

use App\Entity\Position;

interface PositionRepositoryInterface
{
    public function save(Position $position): Position;
}
