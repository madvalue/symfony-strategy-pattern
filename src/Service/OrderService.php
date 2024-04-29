<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Order;
use App\Enum\OrderStatus;

class OrderService implements OrderServiceInterface
{
    public function __construct(
        private NotificationServiceInterface $notificationService
    ) { }

    public function markAsCompleted(Order $order): void
    {
        $order->status = OrderStatus::Completed;
        $this->notificationService->notifyOrderCompleted($order);
    }
}
