<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ROOT."/models/product.php";
class SiteController
{
    public function Actionlist()
    {
//        $category = Category::GetCategoryList();
//        $product_list = Product::GetProduct(4);
//       // var_dump($product_list);
//        $product_recom_list = Product::GetRecomProd();
//
//
        $content = Site::GetContent()[0];

          $phone_1 = Upload::makePhone($content['phone_1']);
          $phone_2 = Upload::makePhone($content['phone_2']);
            $prod = Product::GetProduct();

       $descr = $content['process_text'];

       $text = explode("\n", $descr);
        require ROOT.'/views/site/index.php';
        return true;
    }
}