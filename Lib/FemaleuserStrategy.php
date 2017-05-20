<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lib;

/**
 * Description of FemaleuserStrategy
 *
 * @author Administrator
 */
class FemaleuserStrategy implements UserStrategy {
    //put your code here
    public function showAd() {
        echo '女性用户';
    }

    public function showCategory() {
        echo '女装';
    }

}
