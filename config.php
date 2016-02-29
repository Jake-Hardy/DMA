<?php
///**
// * Created by PhpStorm.
// * User: development
// * Date: 8/13/2015
// * Time: 8:16 AM
// */
//define('__ROOT__', docroot(__FILE__));
set_include_path(__DIR__);
$debug = true;
$app_path = "xation.co/jhardy/DMA";



function error_unauthorized(){
    $error = "Unauthorized";
    header("Location: .?error=". base64_encode($error));
}

///http://php.net/manual/en/features.file-upload.multiple.php#53240
function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}