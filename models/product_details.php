<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
          require_once ROOT.'/components/Db.php';

class product_details
{
    public static function GetProdDetails($prod_id)
    {
        $db = DbConnect::GetConnect();
        $statement = "SELECT * FROM products WHERE id = '$prod_id'";
        $res = $db->query($statement);
        for($date = []; $row = $res->fetch(); $date[] = $row);
        return $date;
    }
}