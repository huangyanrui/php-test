<?php
namespace Lib;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Register{
    
    protected static $objects = [];
            
    static function set($alias,$object){
        self::$objects[$alias] = $object;
    }
    
    static function get($alias){
        return self::$objects[$alias];
    }
            
    function _unset($alias){
        unset(self::$objects[$alias]);
    }
    
}

