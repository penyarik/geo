<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CheckOrder
{
    private static $errors = [];
   
    
    
    public  static function CheckName($name)
    {
       if(strlen($name) > 2)
        {
            return true;
        }
        
       self:: $errors[] = 'Имя не должно быть короче 3-х символов';
    
       
    }
    public static function CheckPhone($phone)
    {
        if(preg_match("~380[0-9]{9}~", $phone) == 1)
        {
            return true;
        }
       self:: $errors[] = 'Введите корректный номер';
    }
     
    
    
    public static function SetItemIntoDb($name,$phone,$text,$products,$user_id,$productsInCart,$status)
    {
 
       $TotalPrice = 0; $product_name = '';
       $count = '';
       $prod_id = '';
       
        foreach($products as $elem)
       {
           $counts = $productsInCart[$elem['id']];
           $TotalPrice += $counts * $elem['price'];
           $product_name .= $elem['name']."   ";
           $count .=  $productsInCart[$elem['id']]." ";
           $prod_id .= $elem['id']." ";
           
       }
      
       $db = DbConnect::GetConnect();
  
       echo $prod_id;
       $statment = 'INSERT INTO prod_order(name, phone, text, user_id, product_name, status, totalprice, prod_id, count )  VALUES(:name, :phone, :text, :user_id, :product_name, :status, :TotalPrice, :prod_id, :count)';
        $res = $db->prepare($statment);
        $res ->bindParam(':name', $name, PDO::PARAM_STR);
        $res ->bindParam(':phone', $phone, PDO::PARAM_STR);
        $res ->bindParam(':text', $text, PDO::PARAM_STR);
        $res ->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $res ->bindParam(':product_name', $product_name, PDO::PARAM_STR);
        $res ->bindParam(':status',$status, PDO::PARAM_STR);
        $res ->bindParam(':TotalPrice', $TotalPrice, PDO::PARAM_STR);
        $res ->bindParam(':prod_id',$prod_id, PDO::PARAM_STR);
 
        $res ->bindParam(':count', $count, PDO::PARAM_STR);
        return $res->execute();
        
        
        
    }

    
    
    
    
     
    
    
    
 
    
    public static function GetErrors()
    {
         
        return self::$errors;
    }
}