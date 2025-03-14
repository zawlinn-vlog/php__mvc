<?php

class Controller{

    public function views($dir, $data = [])
    {
       $path =  fileCheck("/views/".$dir);
       
       if($path)
       {
         
          require_once APPROOT . "/views/". $dir . ".php" ;
       }
    }


    public function modals($dir)
    {
        $path =  fileCheck("/modals/" . $dir);

       if($path)
       {
          require_once ( APPROOT . "/modals/" . $dir . ".php");

          return new $dir();
       }
    }
}