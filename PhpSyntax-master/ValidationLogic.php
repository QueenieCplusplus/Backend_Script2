<?php

// to import class by which???
// file & class shall under the same root dir
require 'PostSomething.php';
use PostSomething;

class RenderHomePage{

    // logic for MainPage
    // submit then validate otherwise render without validation.
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        list($error, $userWrite) = validatePhase();

        if($error){
            showData($error);

        }else{
            
            validatePhase($userWrite);
            showData();
        }

    }else{
        showData();
    }


    function showData(){

    }

    function validatePhase(){

    }


}



