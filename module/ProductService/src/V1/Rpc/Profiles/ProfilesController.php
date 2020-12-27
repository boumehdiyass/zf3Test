<?php
namespace ProductService\V1\Rpc\Profiles;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class ProfilesController extends AbstractActionController
{    
    public $data;
    
    public function __construct(){
        $this->data =["status"=> 200, "body"=> 100] ;
    }

    public function profilesAction()
    {
        return new JsonModel($this->data);
    }
}
