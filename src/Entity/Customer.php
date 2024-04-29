<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\NotificationType;

readonly class Customer
{
    public function __construct(
        public int $id,
        public string $email,
        public NotificationType $notificationType
    ) { }
}
