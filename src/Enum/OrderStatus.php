<?php

declare(strict_types=1);

namespace App\Enum;

enum OrderStatus
{
    case New;

    case Completed;
}
