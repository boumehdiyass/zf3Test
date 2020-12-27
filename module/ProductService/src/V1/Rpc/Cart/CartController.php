<?php
namespace ProductService\V1\Rpc\Cart;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class CartController extends AbstractActionController
{
    public $data;
    
    public function __construct(){
        $this->data = ["data"=>[
            [
              "id"=> 836201606037504,
              "name"=> "[Modèles de coopération Disney] ONE MORE2020 été nouveau T-shirt à manches courtes graffiti top femme",
              "selectedOptions"=> [],
              "finalPrice"=> "179",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i1/1652714638/O1CN01v4m3ta1k8FYY743F6_!!1652714638.jpg_430x430q90.jpg",
              "productId"=> "835606421200896",
              "attributesSales"=> [
                "835604723556352:Rose rouge",
                "835604663263232:160/84A/S"
              ],
              "attrIdMap"=> [
                "835604663263232"=> "Taille",
                "835604723556352"=> "Couleur"
              ]
            ],
            [
              "id"=> 836201612853248,
              "name"=> "printemps 2020 et été nouvelle robe à manches lanterne col princesse imprimé français",
              "selectedOptions"=> [],
              "finalPrice"=> "299",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i3/420567757/O1CN01YQQzjU27AktFgUKPU-420567757.jpg_430x430q90.jpg",
              "productId"=> "835605166055424",
              "attributesSales"=> [
                "835604723556352:Rose clair",
                "835604663263232:185/100A/XXL"
              ],
              "attrIdMap"=> [
                "835604663263232"=> "Taille",
                "835604723556352"=> "couleur"
              ]
            ],
            [
              "id"=> 836201619668992,
              "name"=> "T-shirt nouveau style coréen à la mode en coton pour hommes à manches courtes polo t-shirt d'été à manches longues",
              "selectedOptions"=> [],
              "finalPrice"=> "69",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i2/2121884051/O1CN01NbFKPM1fnP2v8Hb8a_!!2121884051.jpg_430x430q90.jpg",
              "productId"=> "835610457694208",
              "attributesSales"=> [
                "835606767755264:M",
                "835604723556352:blanc"
              ],
              "attrIdMap"=> [
                "835606767755264"=> "Taille",
                "835604723556352"=> "couleur"
              ]
            ],
            [
              "id"=> 836201620193280,
              "name"=> "T-shirt coton pour hommes à manches courtes polo t-shirt d'été à manches longues 2020",
              "selectedOptions"=> [],
              "finalPrice"=> "99",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i2/2121884051/O1CN01NbFKPM1fnP2v8Hb8a_!!2121884051.jpg_430x430q90.jpg",
              "productId"=> "835610457694208",
              "attributesSales"=> [
                "835604723556352:vert",
                "835606767755264:M"
              ],
              "attrIdMap"=> [
                "835606767755264"=> "Taille",
                "835604723556352"=> "couleur"
              ]
            ]
          ]];
    }

    public function cartAction()
    {
        return new JsonModel($this->data);
    }
}
