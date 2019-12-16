<?php

$now = new DateTime(); //裝載時間方法的物件到now變數容器。

$vars = array('title' => 'Red Pint\' s web',
              'headline' => 'RedPoint plays PHP',
              'article' => <<<_HTML_
              <p>
                I code for 2 years, like a dummy in 1st year,
                and work harder for the 2 nd year,
                and time passed by, seems to make a progress
                finally, now I am in the upcoming phase of 3rd
                year.
              </p>
              _HTML_
              ,
              'date' => $now->format('l, F j, Y'));

/*
    to replace the var in form template,
    it is required to add { } symbol,
    by using the {} to the key in $vars['key'].
*/
＄t_vars = array();
foreach($vars = $k => $v){
    $t_vars['{'.$k.'}'] = $v;
}

/*
    Read the FieldVar.php
*/
$fieldVar = file_get_contents('FieldVar.php');
if($fieldVar === false){
    die("Can't read the file: $php_errormsg")
}

/*
    reaplacement, and put the callback into new var
*/
// $html = str_replace(search, replace, subject)
$html = str_replace(array_keys($fieldVar), 
                    array_values($fieldVar), 
                    $fieldVar);

/*
    to writ in the new file and output it.
*/
// $newVarArray = file_put_contents(filename, data, flag, context)
// to overwrite the origin file
// $resultContent = file_put_contents('FieldVar.php', $html); 
// to output as a new file
$resultContent = file_put_contents('NewFieldVar.php', $html); 
if($resultContent === false){
    die("can' write in NewFieldVar.php: $php_errormsg");
}