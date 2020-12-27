<?php
namespace ProductService\V1\Rpc\Address;

class AddressControllerFactory
{
    public function __invoke($controllers)
    {
        return new AddressController();
    }
}
