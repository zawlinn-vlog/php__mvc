<?php

class User extends Controller
{
    public function __construct()
    {
        $path = fileCheck("Usermodal");

        echo $path;
    }

    public function index(){

        echo "404 NOT FOUND";
    }


    public function login(){
        echo "LOGIN PAGE";
    }


    public function register(){
        echo "REGISTER PAGE";

    }
}