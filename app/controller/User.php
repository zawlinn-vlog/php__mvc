<?php

class User extends Controller
{
    private $umodal;

    public function __construct()
    {
      $this->umodal = $this->modals('Usermodal');
    }

    public function index()
    {
        $this->views('user/404');
    }

    public function login(){

        $data = [
            'email' =>'',
            'password' => '',
            'emailExist' => false,
            'emailErr' => '',
            'passErr' => ''
        ];

 

       if($_SERVER['REQUEST_METHOD'] == 'POST')

       {
           $data['email'] =  htmlspecialchars($_POST['email'], ENT_QUOTES);

           $data['password'] =  htmlspecialchars($_POST['password'], ENT_QUOTES);

           $isexist = $this->umodal->getDatabyEmail($data['email']);

    
           # CHECK EMAIL EXIST OR NOT

            if(!empty($data['email']))
            {
                
                if(!$isexist)
                {
                    $data['emailErr'] = 'Your email does not exist!';

                }else{

                    $data['emailExist'] = true;

                }

            }


            # CHECK PASSWORD IS EMPTY OR NOT


            if(empty($data['password']))
            {
                $data['passErr'] = 'You missed password this field';
            }



            if(empty($data['emailErr']) && empty($data['passErr']))
            {
                if(password_verify($data['password'], $isexist->password))
                {  

                    setFlash('login_success', "Login is successfully!");

                    $data['email'] = '';

                    redir('');
                    
                }else{
                    $data['passErr'] = "Your password is wrong!";
                }

                $this->views('user/login', $data);


            }else{
                $this->views('user/login', $data);
            }
            
       }

       else{
         $this->views('user/login', $data);
       }

        

    }


    public function register()
    {
        $this->views('user/register');
    }


}