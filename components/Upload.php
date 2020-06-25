<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of upload
 *
 * @author user76
 */
class Upload {
   static public function uploadImg()
   {
            $arr_pass = [];

                     $total = count($_FILES['img']['name']);

                for( $i = 0; $i < $total; $i++) {


                    $tmpFilePath = $_FILES['img']['tmp_name'][$i];


                    if ($tmpFilePath != "") {

                        $newFilePath = ROOT."/template/img/".$_FILES['img']['name'][$i];


                        $arr_pass[] = $newFilePath;
 
					 

                        if (move_uploaded_file($tmpFilePath, $newFilePath) && $i == $total-1) {

                           return $arr_pass;
                        }
                    }
                }
   }
   static function makePhone($phone)
   {
      $res = str_replace('(','',$phone);
      $res =str_replace(')','',$res);
      $res =str_replace(" ",'',$res);
      return $res;
   }
}