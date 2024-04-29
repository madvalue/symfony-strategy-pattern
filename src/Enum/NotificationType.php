<?php

declare(strict_types=1);

namespace App\Enum;

enum NotificationType
{
    case Email;

    case SMS;
}
