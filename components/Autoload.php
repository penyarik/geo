<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 

function my_autoloader($class) {
     $array_path = ['/models', '/components'];
    foreach ($array_path as $elem)
    {
        $file_path = ROOT.$elem.'/'.$class.'.php';
        if(file_exists($file_path))
        {
            include_once $file_path;
        }
    }
}

spl_autoload_register('my_autoloader');
