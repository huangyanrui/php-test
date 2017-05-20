<?php
namespace Lib;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Loader{
    
    static function autoload($class){
        
        
        require BASEDIR.str_replace('\\','/', $class).'.php';
        
//        var_dump($file);
    }
    
}
