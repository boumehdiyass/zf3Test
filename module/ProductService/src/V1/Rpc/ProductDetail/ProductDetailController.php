<?php
namespace ProductService\V1\Rpc\ProductDetail;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class ProductDetailController extends AbstractActionController
{
    public $data;
    
    public function __construct(){
        $this->data = [
            "id" => 835606421200896,
            "name" => "[Modèles de coopération Disney] ONE MORE2020 été nouveau t-shirt à manches courtes graffiti top femme",
            "imageUrlSmall" => "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i1/1652714638/O1CN01v4m3ta1k8FYY743F6_!!1652714638.jpg_430x430q90.jpg",
            "imageUrlLarge" => [
              "https://img.alicdn.com/imgextra/i3/384661685/O1CN01l7joqz1OJlxuNwjiN_!!384661685-0-lubanu-s.jpg_430x430q90.jpg",
              "https://gd2.alicdn.com/imgextra/i2/763299481/O1CN01Alm2Ew2JuLhCamzjk_!!763299481.jpg_400x400.jpg",
              "https://img.alicdn.com/imgextra/i3/384661685/O1CN01l7joqz1OJlxuNwjiN_!!384661685-0-lubanu-s.jpg_430x430q90.jpg"
            ],
            "description" => "Top fin à motif col rond",
            "specification" => [],
            "lowestPrice" => 179,
            "totalSales" => 0,
            "attributeSaleImages" => [
              [
                "attributeSales" => "835604723556352:Rose rouge",
                "imageUrls" => ["https://img.alicdn.com/imgextra/i3/384661685/O1CN01l7joqz1OJlxuNwjiN_!!384661685-0-lubanu-s.jpg_430x430q90.jpg"]
              ],
              [
                "attributeSales" => "835604723556352:blanc",
                "imageUrls" => ["https://gd2.alicdn.com/imgextra/i2/763299481/O1CN01Alm2Ew2JuLhCamzjk_!!763299481.jpg_400x400.jpg",
                  "https://img.alicdn.com/imgextra/i3/384661685/O1CN01l7joqz1OJlxuNwjiN_!!384661685-0-lubanu-s.jpg_430x430q90.jpg"]
              ]
            ],
            "selectedOptions" => [
              [
              "title" => "Quantité",
              "options" => [
                [
                  "optionValue" => '2',
                  "priceVar" => 'x2'
                ],
                [
                  "optionValue" => '3',
                  "priceVar" => 'x3'
                ]
              ]
            ],
              [
              "title" => "Ornements de personnalité",
              "options" => [
                [
                  "optionValue" => 'ordinaire',
                  "priceVar" => '+50'
                ],
                [
                  "optionValue" => 'luxe',
                  "priceVar" => '+100'
                ]
              ]
            ]
          ],
            "skus" => [
              [
                "attributesSales" => [
                  "835604663263232:155/80A/XS",
                  "835604723556352:Rose rouge"
                ],
                "storage" => 0,
                "price" => 179
              ],
              [
                "attributesSales" => [
                  "835604723556352:Rose rouge",
                  "835604663263232:160/84A/S"
                ],
                "storage" => 0,
                "price" => 179
              ],
              [
                "attributesSales" => [
                  "835604723556352:Rose rouge",
                  "835604663263232:165/88/A/M"
                ],
                "storage" => 0,
                "price" => 179
              ],
              [
                "attributesSales" => [
                  "835604663263232:155/80A/XS",
                  "835604723556352:blanc"
                ],
                "storage" => 0,
                "price" => 179.9
              ]
            ],
            "attrIdMap" => [
              "835604663263232" => "Taille",
              "835604723556352" => "Couleur"
            ]
          ];
    }

    public function productDetailAction()
    {
        return new JsonModel($this->data);
    }
}
