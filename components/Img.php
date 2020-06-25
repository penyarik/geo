<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Img
 *
 * @author user76
 */
class Img {
    static public function mainImg($images)
    {

        $img_pass = $images[0];
        $img_pass = strtr($img_pass, "\\", "/");

        $arr =   (explode('/', $img_pass));
        for($i = 0; $i <=4; $i++)
        {
            unset($arr[$i]);
        }
        $img_pass = implode(($arr), '/');
        return '/'.$img_pass;
    }
}