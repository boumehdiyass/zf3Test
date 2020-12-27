<?php
namespace ProductService\V1\Rpc\Catalog;

class CatalogControllerFactory
{
    public function __invoke($controllers)
    {
        return new CatalogController();
    }
}
