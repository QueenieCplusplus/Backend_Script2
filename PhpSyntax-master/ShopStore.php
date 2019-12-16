<?php

class ShopStore {

    protected $account;
    protected $password;

    public function __construct($account, $password) {
        $this->account = $account;
        $this->password = $password;
    }

    public function accountGetter(){
        return $this->account;
    }

    public function passwordGetter(){
        return $this->password;
    }

    public function passwordUpdateSetter($password){
        $this->password = $password;
    }
}