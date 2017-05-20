<?php
namespace Lib;



class Object{
    
//    static function test(){
//        echo __METHOD__;
//    }
    
    protected  $array = array();
            
    function __set($name, $value) {
        
//        var_dump(__METHOD__);
        $this->array[$name] = $value;
    }
    
    function __get($name) {
//        var_dump(__METHOD__);
       return $this->array[$name];
        
    }
    function __call($func, $param) {
        var_dump($func,$param);

        return "magic function\n";
    }
    
    static function __callStatic($func, $param) {
        var_dump($func,$param);

        return "magic static function\n";
    }
    
    function __toString() {
        return __CLASS__;
    }
    
    function __invoke($param) {
        var_dump($param);
        return 'invoke function';
    }
}

