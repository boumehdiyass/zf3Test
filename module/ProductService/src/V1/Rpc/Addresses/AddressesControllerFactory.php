<?php
namespace ProductService\V1\Rpc\Addresses;

class AddressesControllerFactory
{
    public function __invoke($controllers)
    {
        return new AddressesController();
    }
}
