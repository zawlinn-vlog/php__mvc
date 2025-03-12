<?php

function explodeurl($url){
    return explode('/', rtrim($url, '/'));
}


function printErr($ary){
    echo "<pre>" .print_r($ary, true)."</pre>";
}


function redir($path){
    header("Location" . URLROOT . $path);
}

function filecheck($file){
    return file_exists(APPROOT . $file . ".php");
}

