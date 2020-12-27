<?php
namespace ProductService\V1\Rpc\Cart;

class CartControllerFactory
{
    public function __invoke($controllers)
    {
        return new CartController();
    }
}
