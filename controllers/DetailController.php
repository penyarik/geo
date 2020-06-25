<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DetailController
 *
 * @author user76
 */
require_once ROOT."/models/product.php";

class DetailController {
    public function Actionshow($id)
    {
        $content = Site::GetContent()[0];

          $phone_1 = Upload::makePhone($content['phone_1']);
          $phone_2 = Upload::makePhone($content['phone_2']);
       $prod = product_details::GetProdDetails($id);

       $descr = $prod[0]['descr'];
       $text = explode("\n", $descr);
        $imgs = json_decode($prod[0]['img']);




//       echo "<p> $text</p>"


       require_once ROOT.'/views/detail/index.php';
       return true;
    }
}