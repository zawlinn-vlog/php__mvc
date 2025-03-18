<?php

class Admin extends Controller
{
    private $umodal;
   
    public function __construct()
    {
        $this->umodal = $this->modals('Usermodal');   
    }

    public function kickbck($dir, $data)
    {
        ########## KICK BACK #########

        if(isset($_SESSION['currentuser']) && $_SESSION['currentuser']->usertype == 0)
        {
            $this->views('admin/'. $dir, $data);
 
        }else{
 
            redir('');
        }
    }

    public function index(){

        $this->kickbck('index', []);
        
    }

    public function createposts(){

        $data = [
            'title' => '',
            'imgPath' => '',
            'imgtmp' => '',
            'description'=> '',
            'vdoPath' => '',
            'vdotmp' => '',
            'posttype' => '',
            'createdby' => '',
            'titleErr' => '',
            'imgPathErr' => '',
            'vdoPathErr' => '',
            'descriptionErr' => ''          
        ];

        $rand = mt_rand(1000000, 10000000);

        $date = date('Y-m-d h:i:sa');

        $data['authorname'] = $_SESSION['currentuser']-> fullname;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

           
            $head = $_POST['head'];

            $title = htmlspecialchars($_POST['title']);

            $data['description'] = htmlspecialchars(trim($_POST['desc']));

            # CHECK has VALUE OR NOT

            if(empty($title))
            {
               
                $data['titleErr'] = 'You should fill this field!';
            }
            else{
                $data['title'] = $head . ' - ' . $title;
            }

            if(empty($data['description']))
            {
                $data['descriptionErr'] = 'You should fill this field!';
            }
            
            if(empty($_FILES['pic']['name']))
            {
               
                $data['imgPathErr'] = 'You should fill this field!';

            }else{

                $data['imgtmp'] = $_FILES['pic']['tmp_name'];

                $ext = getExt($_FILES['pic']['name']);

                $data['imgPath'] = './assets/upload/img/'."IMG_". $rand . '.'. $ext;
                
            }


            if(empty($_FILES['vdo']['name']))
            {
                $data['vdoPathErr'] = 'You should fill this field!';
            }else{
                $data['vdotmp'] = $_FILES['vdo']['tmp_name'];

                $ext = getExt($_FILES['vdo']['name']);

                $data['vdoPath'] = './assets/upload/vdo/'."VDO_". $rand . '.'. $ext;

            }

            if(empty($data['description']))
            {
                $data['descriptionErr'] = 'You should fill this field!';
            }
           
        
           if(empty($data['titleErr']) && empty($data['imgPathErr']) && empty($data['vdoPathErr']) && empty($data['descriptionErr']))
           {

            $this->umodal->insertPost($data['title'], $data['imgPath'], $data['description'], $data['vdoPath'], $data['posttype'], $data['authorname'], $date, $date);

            move_uploaded_file($data['imgtmp'], $data['imgPath']);

            move_uploaded_file($data['vdotmp'], $data['vdoPath']);

            redir('admin/allposts');
                
           }
           else{

                $this->views('admin/createposts', $data);

           }
        }else{
            $this->kickbck('createposts', $data); 
        }
    }


    public function allposts(){

        $res =  $this->umodal-> getAllposts();

       if($_SERVER['REQUEST_METHOD'] == 'POST')
       {



       }else{
            $this->views('admin/allposts', $res);

       }


    }

  
}