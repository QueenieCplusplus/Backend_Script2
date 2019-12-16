<?php

// $_POST is an array Obj 

$_POST['RedPint'] = 'an fullstack techer';
$_POST['Tech'] = ['cloud', 'code', 'cpu'];
$_POST['Food'] = ['starbucks', 'cake', 'bread', 'toast'];
$_POST['Program'] = ['swift4', 'android3', 'python', 'c++', 'perl', 'js', 'go', 'kotlin'];
$_POST['BadMonth'] = ['3', '5', '7'];
$_POST['BadMonthForYour'] = ['9', '11', '1'];

class PostSomething{

    // to access the val in $_POST directly.
    function processPost(){
        print '<ul>';

        foreach($_POST as $k => $v){
            print '<li>' . htmlentities($k) .'='. htmlentities($v).'</li>';
        }

        print '</ul>';
    }
}

