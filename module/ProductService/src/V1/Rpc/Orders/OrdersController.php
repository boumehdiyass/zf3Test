<?php
namespace ProductService\V1\Rpc\Orders;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class OrdersController extends AbstractActionController
{
    public $data;
    
    public function __construct(){
        $this->data =["data"=>[
            [
              "id"=> 836201701982208,
              "paymentAmt"=> 478,
              "orderState"=> "NOT_PAID_RESERVED",
              "productList"=> [
                [
                  "name"=> "[Modèles de coopération Disney] ONE MORE2020 été nouveau t-shirt à manches courtes graffiti top femme",
                  "selectedOptions"=> [],
                  "finalPrice"=> 179,
                  "productId"=> 835606421200896,
                  "attributesSales"=> [
                    "835604663263232:160/84A/S",
                    "835604723556352:Rose rouge"
                  ],
                  "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i1/1652714638/O1CN01v4m3ta1k8FYY743F6_!!1652714638.jpg_430x430q90.jpg",
                  "attrIdMap"=> [
                    "835604663263232"=> "Taille",
                    "835604723556352"=> "Couleur"
                  ]
                ],
                [
                  "name"=> "printemps et été nouvelle robe à manches lanterne col princesse imprimé français 2020",
                  "selectedOptions"=> [],
                  "finalPrice"=> 299,
                  "productId"=> 835605166055424,
                  "attributesSales"=> [
                    "835604723556352:Rose clair",
                    "835604663263232:185/100A/XXL"
                  ],
                  "imageUrlSmall"=> "https//img.alicdn.com/imgextra/i3/420567757/O1CN01YQQzjU27AktFgUKPU-420567757.jpg_430x430q90.jpg",
                  "attrIdMap"=> [
                    "835604663263232"=> "Taille",
                    "835604723556352"=> "Couleur"
                  ]
                ]
              ]
            ],
            [
              "id"=> 836201712992256,
              "paymentAmt"=> 179,
              "orderState"=> "NOT_PAID_RESERVED",
              "productList"=> [
                [
                  "name"=> "[Modèles de coopération Disney] ONE MORE2020 été nouveau t-shirt à manches courtes graffiti top femme",
                  "selectedOptions"=> [],
                  "finalPrice"=> 179,
                  "productId"=> 835606421200896,
                  "attributesSales"=> [
                    "835604663263232:160/84A/S",
                    "835604723556352:Rose rouge"
                  ],
                  "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i1/1652714638/O1CN01v4m3ta1k8FYY743F6_!!1652714638.jpg_430x430q90.jpg",
                  "attrIdMap"=> [
                    "835604663263232"=> "Taille",
                    "835604723556352"=> "Couleur"
                  ]
                ]
              ]
            ],
            [
              "id"=> 836201724002304,
              "paymentAmt"=> 338,
              "orderState"=> "CONFIRMED",
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
              ]
            ]
          ]];
    }

    public function ordersAction()
    {
        return new JsonModel($this->data);
    }
}
