<?php
namespace Lib;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Factory{
    
    static function createDatabase(){
        
//        $db = new Database();
//        return $db;
        
        $db = Database::getInstance();
        
        Register::set('db1', $db);
        
        return $db;
    }
    
}

