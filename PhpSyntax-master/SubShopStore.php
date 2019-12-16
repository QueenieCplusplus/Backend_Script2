<?php

use ShopStore;

class SubShopStore extends ShopStore {

    public function __construct($account, $password){
        parent::__construct($account, $password);
    }

    public function passwordGetter(){
        $currentPassword = '';
        // foreach(){
            //設計遊走陣列的判斷條件如
        // }
        $currentPassword += $password->passwordGetter;
        return $currentPassword;
    }
}

