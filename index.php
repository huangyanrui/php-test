<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header("Content-type: text/html; charset=utf-8"); 
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('DS',DIRECTORY_SEPARATOR);
define('BASEDIR', __DIR__ . DS);

require BASEDIR.DS.'Lib/Loader.php';

spl_autoload_register('\\Lib\\Loader::autoload');

$db = Lib\Factory::createDatabase();


var_dump($db);