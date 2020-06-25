<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Site
 *
 * @author user76
 */
require_once ROOT.'/components/Db.php';

class Site {
   
   
    public static function GetContent()
    {
        
         
         $db = DbConnect::GetConnect();
         
        
         $statement = "SELECT * FROM content";
         
          $result = $db ->query($statement);
         for($date = []; $row = $result->fetch(PDO::FETCH_ASSOC); $date[] = $row);
         
         return $date;
         
    }
}
