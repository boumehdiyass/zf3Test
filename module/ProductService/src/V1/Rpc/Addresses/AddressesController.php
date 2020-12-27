<?php
namespace ProductService\V1\Rpc\Addresses;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class AddressesController extends AbstractActionController
{
    public $data;
    
    public function __construct(){
        $this->data = ["data"=>[
            [
                "id"=> 836201646407680,
                "fullName"=> "Full Name",
                "line1"=> "Adresse 1",
                "line2"=> "Adresse 2",
                "postalCode"=> "60100",
                "phoneNumber"=> "0987654345",
                "city"=> "Creil",
                "province"=> "Oise",
                "country"=> "France"
            ],
            [
                "id"=> 836201646407680,
                "fullName"=> "Full Name2",
                "line1"=> "Adresse 12",
                "line2"=> "Adresse 22",
                "postalCode"=> "60200",
                "phoneNumber"=> "092222222222",
                "city"=> "Nogent sur oise",
                "province"=> "Oise",
                "country"=> "France"
             ]
        ]];
    }

    public function addressesAction()
    {
        return new JsonModel($this->data);
    }
}
