<?php

class Admin extends Controller
{
    public function __construct()
    {
        $this->modals('Adminmodal');

        ######### KICK BACK #########

        if($_SESSION['currentuser'] && $_SESSION['currentuser'] -> usertype == 0)
            {

            $this->views('admin/index');

            }else{

            redir('');
        }
    }

    public function index(){

       
        
    }

    public function createAcc(){
        echo "CREATEING ACCOUNT";
    }
}