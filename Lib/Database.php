<?php
namespace Lib;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Database{
    
    protected static $db;


    private function __construct() {
        
    }
    
    static function getInstance(){
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }
        
    }
            
    function  where($where){
        return $this;
    }
    
    function  order($order){
        return $this;
    }
    
    function  limit($limit){
        return $this;
    }
}
