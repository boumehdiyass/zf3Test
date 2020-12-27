<?php
namespace ProductService\V1\Rpc\Address;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class AddressController extends AbstractActionController
{
    public $data;
    
    public function __construct(){
        $this->data =[
            "id"=> 836201646407680,
            "fullName"=> "Full Name",
            "line1"=> "Adresse 1",
            "line2"=> "Adresse 2",
            "postalCode"=> "60100",
            "phoneNumber"=> "0987654345",
            "city"=> "CREIL",
            "province"=> "Oise",
            "country"=> "France"
         ];
    }

    public function addressAction()
    {
        return new JsonModel($this->data);
    }
}
