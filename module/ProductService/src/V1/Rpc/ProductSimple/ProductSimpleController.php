<?php
namespace ProductService\V1\Rpc\ProductSimple;

use Laminas\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class ProductSimpleController extends AbstractActionController
{
    public $data;
    
    public function __construct(){
        $this->data = [ "data"=>    [
            [
              "id"=> 835605166055424,
              "name"=> "printemps 2020 et été nouvelle robe à manches lanterne col princesse imprimé français",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i3/420567757/O1CN01YQQzjU27AktFgUKPU-420567757.jpg_430x430q90.jpg",
              "lowestPrice"=> 299,
              "totalSales"=> 15
            ],
            [
              "id"=> 835605840814080,
              "name"=> "Silk Kaki 2020 nouvelle robe de broderie de revers de fille de style hyuna est mince jupe française à manches bouffantes été",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i3/3191337305/O1CN01X11Ad123pjrtuTsDT_!!3191337305-0-lubanu-s.jpg_430x430q90.jpg",
              "lowestPrice"=> 69,
              "totalSales"=> 0
            ],
            [
              "id"=> 835605993381888,
              "name"=> "nouvelle campanule française premier amour style hyuna jupe longue ins super fée forêt robe florale femme été",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i2/919988405/O1CN01r64Yrq2BxXWoXwPdn_!!919988405-0-lubanu-s.jpg_430x430q90.jpg",
              "lowestPrice"=> 136,
              "totalSales"=> 0
            ],
            [
              "id"=> 835606280691712,
              "name"=> "Pantalons de sport pour femmes d'été mince en soie de glace taille ample à neuf points taille haute drapé cuivre ammoniaque soie à jambes larges culottes décontractées",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i2/2936046818/O1CN01ppSbgG20EgyahFUC3_!!2936046818.jpg_430x430q90.jpg",
              "lowestPrice"=> 69,
              "totalSales"=> 0
            ],
            [
              "id"=> 835606421200896,
              "name"=> "[Modèles de coopération Disney] ONE MORE2020 été nouveau t-shirt à manches courtes graffiti top femme",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i1/1652714638/O1CN01v4m3ta1k8FYY743F6_!!1652714638.jpg_430x430q90.jpg",
              "lowestPrice"=> 179,
              "totalSales"=> 0
            ],
            [
              "id"=> 835606970130432,
              "name"=> "vêtements mariées 2020 nouveau mariage mince robes de mariée chinoises hors de la cour vêtements femmes enceintes grande taille Xiuhe femme été",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i2/3421650890/O1CN01R2nQn91IRf6ZudlnS_!!3421650890.jpg_430x430q90.jpg",
              "lowestPrice"=> 199,
              "totalSales"=> 0
            ],
            [
              "id"=> 835610457694208,
              "name"=> "T-shirt nouveau style coréen à la mode en coton pour hommes à manches courtes polo t-shirt t-shirt d'été à manches longues",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/imgextra/i2/2121884051/O1CN01NbFKPM1fnP2v8Hb8a_!!2121884051.jpg_430x430q90.jpg",
              "lowestPrice"=> 69,
              "totalSales"=> 0
            ],
            [
              "id"=> 835624067686400,
              "name"=> "Nike T-shirt Nike Homme 2020 Été Nouveau Haut de Basket-ball Décontracté en Coton à Manches Courtes en Coton",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i2/772352677/O1CN019EqXnJ1Ve6rktNlHK_!!772352677-0-lubanu-s.jpg_430x430q90.jpg",
              "lowestPrice"=> 199,
              "totalSales"=> 0
            ],
            [
              "id"=> 835624870895616,
              "name"=> "muzhilee summer ultra-mince jeans pour hommes bleu clair rétro grande taille casual été en soie de glace stretch",
              "imageUrlSmall"=> "https://gd4.alicdn.com/imgextra/i4/2459928534/O1CN01hdiPyF2CuccFFdRr6_!!2459928534.jpg_400x400.jpg",
              "lowestPrice"=> 268,
              "totalSales"=> 0
            ],
            [
              "id"=> 835625139855360,
              "name"=> "Fenteng coréen ours brun pyjamas femmes d'été à manches courtes pantalon couple costumes coton mince bande dessinée hommes et femmes service à domicile",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i1/665542280/O1CN01Z4QLZn1SiHccxr3ix_!!665542280-0-lubanu-s.jpg_430x430q90.jpg",
              "lowestPrice"=> 219,
              "totalSales"=> 0
            ],
            [
              "id"=> 835625720242176,
              "name"=> "Pyjama en soie glacée pour hommes d'été mince pantalon à manches courtes en soie d'été en soie, plus la taille des hommes costume deux pièces de service à domicile",
              "imageUrlSmall"=> "https://gd2.alicdn.com/imgextra/i2/4088395539/O1CN01ujQmOS1qmuOdlspd2_!!4088395539.jpg_400x400.jpg",
              "lowestPrice"=> 338,
              "totalSales"=> 0
            ],
            [
              "id"=> 835625903218688,
              "name"=> "Couple pyjamas femmes été mince soie de glace coréenne lâche à manches courtes service à domicile vraie soie hommes costume deux pièces été",
              "imageUrlSmall"=> "https://gd2.alicdn.com/imgextra/i2/198533693/O1CN01huEVR81d9RBbwwYdM_!!198533693.jpg_400x400.jpg",
              "lowestPrice"=> 398,
              "totalSales"=> 0
            ],
            [
              "id"=> 835626228277248,
              "name"=> "Adidas Shorts Adidas Homme 2020 Été Site Web officiel Pantalon de sport de course Pantalon à cinq points respirant à séchage rapide tissé",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i3/384661685/O1CN01l7joqz1OJlxuNwjiN_!!384661685-0-lubanu-s.jpg_430x430q90.jpg",
              "lowestPrice"=> 139,
              "totalSales"=> 0
            ],
            [
              "id"=> 835626654523392,
              "name"=> "Soutien-gorge réglable sans jantes, petit soutien-gorge, rassemblez et fermez le haut de la poitrine pour éviter l'affaissement des sous-vêtements d'été des femmes",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i4/1775752343/O1CN01IMn8KB1TB8aKLGlcC_!!0-item_pic.jpg_430x430q90.jpg",
              "lowestPrice"=> 129,
              "totalSales"=> 0
            ],
            [
              "id"=> 835626932396032,
              "name"=> "Mulinsen 2020 nouvelles sandales femme été Rome fond plat tout-match velcro chaussures de plage sport ins tide",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i1/2207371497379/O1CN01qQJF6K24NdAMxNl8i_!!2207371497379.jpg_430x430q90.jpg",
              "lowestPrice"=> 178,
              "totalSales"=> 0
            ],
            [
              "id"=> 835627024146432,
              "name"=> "Sandales Baotou femmes 2020 nouvel été bout pointu talons moyens talons fins et épais chaussures de fée du vent doux pour femmes",
              "imageUrlSmall"=> "https://gd2.alicdn.com/imgextra/i2/763299481/O1CN01Alm2Ew2JuLhCamzjk_!!763299481.jpg_400x400.jpg",
              "lowestPrice"=> 446,
              "totalSales"=> 0
            ],
            [
              "id"=> 835627189297152,
              "name"=> "Chaussures en cuir pour personnes âgées, costumes d'affaires en cuir pour hommes, chaussures de travail à lacets à fond souple décontracté coréen",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/i2/197232874/O1CN01JsRnTE1X6KttaL7n8_!!197232874-0-lubanu-s.jpg_430x430q90.jpg",
              "lowestPrice"=> 199,
              "totalSales"=> 0
            ],
            [
              "id"=> 835627564163072,
              "name"=> "Goldlion sacs à main 2020 nouveau sac en cuir femmes messenger chaîne sac à bandoulière mode petit sac carré ins",
              "imageUrlSmall"=> "https://img.alicdn.com/imgextra/https://img.alicdn.com/bao/uploaded/i3/3074861492/O1CN01cBOMiy1MtNUw0F5n3_!!3074861492.jpg_430x430q90.jpg",
              "lowestPrice"=> 599,
              "totalSales"=> 0
            ] 
        ]   ];
    }

    public function productSimpleAction()
    {
        return new JsonModel($this->data);
    }
}
