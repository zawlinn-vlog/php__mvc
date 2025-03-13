<?php


class Post extends Controller{
    public function __construct()
    {
        printit(__CLASS__ . " Instance");
    }

    public function index(){
        $this->views('post/index');
    }
}