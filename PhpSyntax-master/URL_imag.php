//Image source as URL

<?php
function html_img($url, $alt = null, $height = null, $width = null){
    $html = '<img src ="' . $url .'"';

    if(isset($alt)){
        $html .= 'a="'.$alt.'"';
    }

    if(isset($height)){
        $html .= 'h="'.$alt.'"';
    }

    if(isset($width)){
        $html .= 'w="'.$alt.'"';
    }

    $html .= '/>'; //? 
    return $html;
}