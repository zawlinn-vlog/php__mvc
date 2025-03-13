<?php

class Controller{

    public function views($dir)
    {
       $path =  fileCheck("/views/".$dir);

       if($path)
       {
            addFile("/views/" . $dir);
       }
    }


    public function modals($dir)
    {
        $path =  fileCheck("/modals/" . $dir);

       if($path)
       {
            addFile("/modals/" . $dir);

            return new $dir();
       }
    }
}