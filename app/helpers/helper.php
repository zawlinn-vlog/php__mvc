<?php

session_start();

date_default_timezone_set('Asia/Bangkok');


function printArr($ary){
    echo "<pre>" .print_r($ary, true)."</pre>";
}

function printIt($str){
    echo "This is &mdash; " . $str . "<br/>";
}


function explodeUrl($url){
    return explode('/', rtrim($url, '/'));
}

function getExt($file){
   return explode('.' , $file)[1];
}


function fileCheck($file){
    return file_exists(APPROOT . $file . ".php");
}


function addcontroller($filename){
    require_once APPROOT . "/controller/" .   $filename . ".php";
}


function redir($path){
    // echo URLROOT . $path;
    header("Location:" . URLROOT . $path);
}


function setFlash($name = '', $msg='')
{
    if(!empty($name) && !empty($msg))
    {      
        unset($_SESSION[$name]);
        $_SESSION[$name] = $msg;
             
    }
}


function getFlash($name=''){

    if(isset($_SESSION[$name])){
        echo "<p class='alert alert-success'> $_SESSION[$name] </p>";
        unset($_SESSION[$name]);
    }
}







