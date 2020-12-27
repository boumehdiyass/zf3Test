<?php
namespace ProductService\V1\Rpc\Filter;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class FilterController extends AbstractActionController
{
    public $data;

    public function __construct(){
        $this->data =[
            "data"=>[
                [
                    "id"=> 835604663263232,
                    "name"=> "Taille",
                    "description"=> "Hauteur + buste + taille",
                    "values"=> [
                      "165/84A/M",
                      "160/84A/S",
                      "155/76A/XS",
                      "160/80A/S",
                      "185/100A/XXL",
                      "190/104A/XXXL",
                      "170/88A/L",
                      "155/80A/XS",
                      "170/88A/M",
                      "175/92A/XL",
                      "165/88/A/M",
                      "175/92A/L",
                      "180/96A/XL"
                    ],
                    "method"=> "SELECT",
                    "type"=> "SALES_ATTR"
                  ],
                  [
                    "id"=> 835604723556352,
                    "name"=> "Couleur",
                    "values"=> [
                      "Beige",
                      "Rose",
                      "Rose clair",
                      "Rose rouge",
                      "blanc",
                      "vert",
                      "Jaune"
                    ],
                    "method"=> "SELECT",
                    "type"=> "SALES_ATTR"
                  ],
                  [
                    "id"=> 835717050163200,
                    "name"=> "Matériel",
                    "description"=> "Vêtements (tissu)",
                    "values"=> [
                      "Soie",
                      "Mousseline de soie",
                      "Modal",
                      "Pur coton",
                      "tricot",
                      "Coton Lin"
                    ],
                    "method"=> "SELECT",
                    "type"=> "PROD_ATTR"
                  ]
            ]
        ];
    }
    
    public function filterAction()
    {
        return new JsonModel($this->data);
    }
}
