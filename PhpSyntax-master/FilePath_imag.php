// Image path as File

<?php
function html_image($file, $alt = null, $height = null, $width= null) {

    if(isset($GLOBALS['image_path'])){
        $file = $GLOBALS['image_path'].$file;
    }

    $html = '<img src="' .$file. '"';
    if(isset($alt)){
        $html .= 'alt="' .$alt . '"';
    }

    if(isset($height)){
        $html .= 'height="' .$height . '"';
    }

    if(isset($a)){
        $html .= 'width="' .$height . '"';
    }

    $html.= '/>';
    return $html;
}