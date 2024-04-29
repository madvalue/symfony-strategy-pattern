<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Order;
use App\Service\Notifications\NotificationInterfaction;

class NotificationService implements NotificationServiceInterface
{
    public function __construct(
        private array $strategies = []
    ) { }

    public function notifyOrderCompleted(Order $order): void
    {
        $selectedStrategy = $this->resolveForOrder($order);

        if (null === $selectedStrategy) {
            return;
        }

        $selectedStrategy->sendOrderCompleted($order);
    }   

    private function resolveForOrder(Order $order): ?NotificationInterfaction
    {
        foreach ($this->strategies as $strategy) {
            if ($strategy->supports($order)) {
                return $strategy;
            }
        }

        return null;
    }
}
