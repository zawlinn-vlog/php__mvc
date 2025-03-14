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

    # LOG IN SESSION

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

           $existingData = $this->umodal->getDatabyEmail($data['email']);

    
           # CHECK EMAIL EXIST OR NOT

            if(!empty($data['email']))
            {
                
                if(!$existingData)
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
                if(password_verify($data['password'], $existingData->password))
                {  

                    setFlash('login_success', "Login is successfully!");

                    $_SESSION['currentuser'] = $existingData;

                    $data['email'] = '';

                    if($existingData -> usertype == 1)
                    {
                        redir('admin');

                    }else{
                        redir('');
                    }
                    
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

    # REGISTER SESSION

    public function register()
    {
        $data = [
            'fname' =>'',
            'email' =>'',
            'password' => '',
            'cpassword' => '',
            'emailExist' => false,
            'fnameErr' =>'',
            'emailErr' => '',
            'passErr' => '',
            'cpassErr' => ''
        ];


        $uname = 'UID_' . mt_rand(100000, 1000000);

        if($_SERVER["REQUEST_METHOD"] == 'POST')
        {

            $data['fname'] = htmlentities($_POST['fname']);
            $data['email'] = htmlentities($_POST['email']);
            $data['password'] = htmlentities($_POST['password']);
            $data['cpassword'] = htmlentities($_POST['cpassword']);

            if(empty($data['fname']))
            {
                $data['fnameErr'] = 'Your sholud Fill this field';
            }

            if(empty($data['email']))
            {
                $data['emailErr'] = 'Your sholud Fill this field';

                
            }else{

                $existingData =  $this->umodal->getDatabyEmail($data['email']);

                if($existingData){

                    $data['emailErr'] = 'Your input mail is already exist!';
                    
                }else{

                }
            }

            if(empty($data['password']))
            {
                $data['passErr'] = 'Your sholud Fill this field';
            }

            if(empty($data['cpassword']))
            {
                $data['cpassErr'] = 'Your sholud Fill this field';
            }

            if(empty($data['fnameErr']) && empty($data['emailErr']) && empty($data['passErr']))
            {
                echo "SUCCESS";
            }
            else{
                $this->views('user/register', $data);
            }


        }else
        {
            $this->views('user/register');
        }
    }


    public function logout()
    {
        session_destroy();
        redir('user/login');
    }


}