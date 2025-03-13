<?php


class Home extends Controller{
    public function __construct()
    {
        $this->modals('Usermodal');
    }

    public function index(){
        
        $this->views('home/index');
    }
}