<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ROOT.'/components/Db.php';
class Product
{
    const DEFAULT_ITEM_FOR_PAGE = 20;

    public static function GetProduct($count = self::DEFAULT_ITEM_FOR_PAGE)
    {
         $count = intval($count);

         $db = DbConnect::GetConnect();


         $statement = "SELECT * FROM products WHERE status = '1' ORDER BY id DESC LIMIT $count ";

          $result = $db ->query($statement);
         for($date = []; $row = $result->fetch(PDO::FETCH_ASSOC); $date[] = $row);

         return $date;

    }
    public static function GetContent($count = self::DEFAULT_ITEM_FOR_PAGE)
    {


         $db = DbConnect::GetConnect();


         $statement = "SELECT * FROM content";

          $result = $db ->query($statement);
         for($date = []; $row = $result->fetch(PDO::FETCH_ASSOC); $date[] = $row);

         return $date;

    }

//
//    public static function GetRecomProd()
//    {
//        $db = DbConnect::GetConnect();
//        $statement = "SELECT * FROM product WHERE is_recomended = 1";
//        $result = $db->query($statement);
//        for($date = []; $row = $result->fetch(); $date[] = $row);
//
//        return $date;
//
//    }
//
}