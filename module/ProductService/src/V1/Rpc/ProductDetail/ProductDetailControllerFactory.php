<?php
namespace ProductService\V1\Rpc\ProductDetail;

class ProductDetailControllerFactory
{
    public function __invoke($controllers)
    {
        return new ProductDetailController();
    }
}
