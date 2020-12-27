<?php
namespace ProductService\V1\Rpc\MockOauth;

class MockOauthControllerFactory
{
    public function __invoke($controllers)
    {
        return new MockOauthController();
    }
}
