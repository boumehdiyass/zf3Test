<?php
namespace ProductService\V1\Rpc\Order;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class OrderController extends AbstractActionController
{    
    public $data;
    
    public function __construct(){
        $this->data = [
            "id"=> 836201724002304,
            "address"=> [
              "fullName"=> "full Name Test",
              "line1"=> "Adr tester",
              "line2"=> "Adr tester",
              "postalCode"=> "80100",
              "phoneNumber"=> "0545454556",
              "city"=> "Paris",
              "province"=> "Iles de France",
              "country"=> "France"
            ],
            "productList"=> [
              [
                "name"=> "Pyjama en soie glacée pour hommes d'été mince pantalon à manches courtes en soie d'été en soie, plus la taille des hommes costume deux pièces de service à domicile",
                "selectedOptions"=> [],
                "finalPrice"=> 338,
                "productId"=> 835625720242176,
                "attributesSales"=> [
                  "835604663263232:155/76A/XS"
                ],
                "imageUrlSmall"=> "https://gd2.alicdn.com/imgextra/i2/4088395539/O1CN01ujQmOS1qmuOdlspd2_!!4088395539.jpg_400x400.jpg",
                "attrIdMap"=> [
                  "835604663263232"=> "Taille"
                ]
              ]
            ],
            "paymentType"=> "wechat_pay",
            "orderState"=> "CONFIRMED",
            "paymentAmt"=> 338
          ];
    }

    public function orderAction()
    {
        return new JsonModel($this->data);
    }
}
