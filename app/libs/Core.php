<?php

    # CORE PHP - it divided url into class and method and params

    class Core{

        private $cname = 'Home';
        private $mname = 'index';
        private $param = [];

        public function __construct()
        {
            $url = isset($_GET['url'])? explodeurl($_GET['url']) : '';

            printErr($url);
        }
    }