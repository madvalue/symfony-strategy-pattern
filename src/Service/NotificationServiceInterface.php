<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Order;

interface NotificationServiceInterface
{
    public function notifyOrderCompleted(Order $order): void;
}