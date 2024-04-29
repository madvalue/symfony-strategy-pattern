<?php

declare(strict_types=1);

namespace App\Service\Notifications;

use App\Entity\Order;

interface NotificationInterfaction
{
    public function sendOrderCompleted(Order $order): void;

    public function supports(Order $order): bool;
}
