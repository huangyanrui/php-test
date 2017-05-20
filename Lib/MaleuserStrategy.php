<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lib;

/**
 * Description of MaleuserStrategy
 *
 * @author Administrator
 */
class MaleuserStrategy implements UserStrategy{
    //put your code here
    public function showAd() {
        echo '男款女装';
    }

    public function showCategory() {
        echo '男装';
    }

}
