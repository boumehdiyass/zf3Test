<?php
namespace ProductService\V1\Rpc\ProductSimple;

class ProductSimpleControllerFactory
{
    public function __invoke($controllers)
    {
        return new ProductSimpleController();
    }
}
