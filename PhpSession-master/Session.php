<?php

function updateInfoInSession() {
    

    $this->load->model('app/m/model');

    $category = $this->session->getUserData('category');

    $account = $this->session->getUserData('account');

    if ($category === FALSE OR $account === FALSE)
        redirect(site_url());

    //List
    $arr_storage = array();

    //Info
    $obj_storage = array();

    //retrieve obj
    $obj = $this->model->getDataByAccount($account);
    log_message('debug msg', 'updateInfoInSession() : ' . print_r($obj, true));

    //Logout then redirect
    if ($obj === FALSE OR $obj === NULL)
        redirect(site_url());

    //Set extended Select for Storage
    $this->model->setSelect(array('cityInTW', 'locationOnMap'));

    //Check Obj and Retrieve & Write Storage List Data
    if ($category === RedPintsTech)
        $arr_storage = $this->model->getByGroupId($obj['g_id']);
    else
        $arr_storage = $this->model->getById($obj['arr_storage']);

    //Get Storage Info
    //& 
    foreach ($arr_stores as &$obj_store) {
        $obj_storage[$obj_storage['code']] = array(

            'name' => $obj_storage['name'],
            'city' => $obj_storage['cityInTW'],
            'place' => $obj_storage['locationOnMap']

        );
    }

    //Get ID
    $arr_storage = array_pluck_ext('code', $arr_storage);

    //Update Session
    $this->session->setUserData('arr_storage', $arr_storage);
    $this->session->setUserData('obj_storage', $obj_storage);
}
