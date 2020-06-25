<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of deleteImg
 *
 * @author user76
 */
class deleteImg {
   static public function delete($res)
   {
	   $flag = false;
	   echo 'dededede';
         $imagesss =  (json_decode($res[0]['img']));
var_dump($imagesss);
         $allImg = Admin::GetALLImg();
         $allImgArr = [];
         foreach ($allImg as $elem)
         {
             $imges = json_decode($elem['img']);
             foreach($imges as $img)
             {
                 $allImgArr[] = $img;
             }



         }
var_dump($allImgArr);
        foreach($imagesss as $elem)
        {
            foreach($allImgArr as $imgCheck)
            {
                if($elem == $imgCheck)
                {
                     $flag = true;
                }

            }


           if($flag == false)
           {
               unlink($elem);
           }
        }
   }
}