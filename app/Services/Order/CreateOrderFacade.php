<?php

namespace App\Services\Order;

use App\Interfaces\CreateOrderInterface;

class CreateOrderFacade
{
    public function __construct(CreateOrderInterface $order, $request)
    {
        return $order->create($request);
    }
}
