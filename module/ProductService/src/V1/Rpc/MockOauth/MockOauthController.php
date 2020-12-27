<?php
namespace ProductService\V1\Rpc\MockOauth;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class MockOauthController extends AbstractActionController
{
    public $data;
    
    public function __construct(){
        $this->data = [ 
            'status'=> 200, 
            'body'=> [
                'access_token'=> 'mockTokenString',
                'refresh_token' => 'mockTokenString2'
            ]
        ];
    }

    public function mockOauthAction()
    {
        return new JsonModel($this->data);
    }
}
