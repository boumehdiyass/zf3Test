<?php
namespace ProductService\V1\Rpc\Profiles;

class ProfilesControllerFactory
{
    public function __invoke($controllers)
    {
        return new ProfilesController();
    }
}
