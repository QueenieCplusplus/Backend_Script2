//dechex

<?php
function web_painter($r, $g, $b){
    $hex = [dechex($r), dechex($g), dechex($b)];
   
    // 補上零，當十六進位值僅有一位數時。
    foreach($hex as $k => $v){

        if(strlen($v) == 1){
            $hex[$k] = "0$v";
        }

    }

    return '#'.implode('',$hex);
}