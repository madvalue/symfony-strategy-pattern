<?php

declare(strict_types=1);

namespace App\Service\Notifications;

use App\Entity\Order;
use App\Enum\NotificationType;
use Psr\Log\LoggerInterface;

class SmsNotification implements NotificationInterfaction
{
    public function __construct(
        private LoggerInterface $logger
    ) { }

    public function sendOrderCompleted(Order $order): void
    {
        $this->logger->info('Sending order completed notification via sms');
    }

    public function supports(Order $order): bool
    {
        return NotificationType::SMS === $order->customer->notificationType;
    }
}