<?php
namespace ProductService\V1\Rpc\Filter;

class FilterControllerFactory
{
    public function __invoke($controllers)
    {
        return new FilterController();
    }
}
