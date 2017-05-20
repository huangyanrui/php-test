<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lib;

/**
 *
 * @author Administrator
 */
interface IDatabase {
    //put your code here
    
    
    function connect($host,$user,$pass,$dbName);
        
    function query($sql);
        
    function close();
}
