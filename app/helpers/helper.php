<?php


function printArr($ary){
    echo "<pre>" .print_r($ary, true)."</pre>";
}

function printIt($str){
    echo "This is &mdash; " . $str . "<br/>";
}


function explodeUrl($url){
    return explode('/', rtrim($url, '/'));
}


function fileCheck($file){
    return file_exists(APPROOT . $file . ".php");
}


function addFile($file){
 
    require_once APPROOT . $file . ".php";
}


function addcontroller($filename){
    require_once APPROOT . "/controller/" .   $filename . ".php";
}


function redir($path){
    header("Location" . URLROOT . $path);
}



