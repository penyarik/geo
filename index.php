<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('ROOT', dirname(__FILE__));
session_start();

require_once ROOT.'/components/Autoload.php';

require_once ROOT.'/components/Router.php';
$rout = new Router();
$rout->Run();
 
