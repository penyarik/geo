<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DbConnect
{
    private static $host = 'moversg.mysql.tools';
    private static $dbname = '';
    private static $user = 'er386081_db';
    private static $password = 'gJ8V3JwP';



    public static function GetConnect()
    {
        $host = self::$host; $dbname = self::$dbname; $user = self::$user; $password=self::$password;

        $db = new PDO('mysql:host=er386081.mysql.tools;dbname=er386081_db', $user, $password);
        $db->query("SET NAMES 'UTF-8'");
        return $db;
    }
}