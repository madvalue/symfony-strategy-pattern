<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Order;

interface OrderServiceInterface
{
    public function markAsCompleted(Order $order): void;
}
