<?php

declare(strict_types=1);

namespace App\Enum;

enum UserStatusEnum: string
{
    case AWAITING_CONFIRMATION = 'AwaitingConfirmation';
    case ACTIVE = 'Active';
    case BLOCKED = 'Blocked';
}
