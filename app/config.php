<?php

require_once "../app/bases/base.php";
require_once "../app/helpers/helper.php";



spl_autoload_register(function($classname){
    require_once "../app/libs/". $classname .".php";
});