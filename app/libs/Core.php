<?php

    # CORE PHP - it divided url into class and method and params

    class Core{

        private $cname = 'Home';
        private $mname = 'index';
        private $param = [];

        private $instance; 

        public function __construct()
        {
            $url = isset($_GET['url'])? explodeurl($_GET['url']) : '';

            # CREATE CLASS INSTANCE


            // var_dump($dir);


            if(!empty($url[0]))
            {
                $classname = ucfirst($url[0]);
                
                $dir = filecheck("/controller/". $classname);

                $this->cname = $dir ? $url[0] : $this->cname;

                unset($url[0]);
            }

            echo $this->cname;

            // require_once APPROOT . "/controller/" . $this->cname . ".php";

            // $this->instance = new $this->cname();


            # CREATE METHOD INSTANCE

            $mexist = method_exists($this->instance, $url[1]);

            var_dump($mexist ? $url[1] : $this->mname);


           
        }
    }