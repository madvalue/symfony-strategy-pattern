<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\OrderStatus;

class Order 
{
    public function __construct(
        public readonly int $id,
        public int $total,
        public OrderStatus $status,
        public readonly Customer $customer
    ) { }
}
