<?php
namespace ProductService\V1\Rpc\Orders;

class OrdersControllerFactory
{
    public function __invoke($controllers)
    {
        return new OrdersController();
    }
}
