<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Customer;
use App\Entity\Order;
use App\Enum\NotificationType;
use App\Enum\OrderStatus;
use App\Service\OrderServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrderCompletedController extends AbstractController
{
    public function __construct(
        private OrderServiceInterface $orderService
    ) { }

    #[Route('/order/mark-complete')]
    public function index(): Response
    {
        $customer = new Customer(
            id: 1,
            email: 'test@example.com',
            notificationType: NotificationType::Email
        );

        $order = new Order(
            id: 1,
            total: 6999,
            status: OrderStatus::New,
            customer: $customer
        );

        $this->orderService->markAsCompleted($order);

        return new Response('Marked as completed!');
    }
}
