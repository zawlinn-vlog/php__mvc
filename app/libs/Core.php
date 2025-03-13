<?php

    # CORE PHP - it divided url into class and method and params

    class Core{

        private $clsname = 'Home';
        private $mtdname = 'index';

        private $instance; 

        public function __construct()
        {

            $url = isset($_GET['url']) ? explodeUrl($_GET['url']) : '';

            # CREATE CLASS

            if(!empty($url[0]))
            {

                $class_name = ucfirst($url[0]);

                unset($url[0]);

                $bol = fileCheck("/controller/".$class_name);

                $this->clsname = $bol ? $class_name : $this->clsname;

            }

            addcontroller($this->clsname);

            $this->instance = new $this->clsname();

            # CREATE METHOD

            if(!empty($url[1]))
            {
                $method_name = $url[1];

                unset($url[1]);

                $bol = method_exists($this->instance, $method_name);

                $this->mtdname = $bol ? $method_name : $this->mtdname;
            }

            $params = !empty($url) ? array_values($url) : [];

            call_user_func([$this->instance, $this->mtdname], $params);
          
        }
    }