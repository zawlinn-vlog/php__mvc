<?php

session_start();


function flash($name='', $msg='')
{
    if(!isset($_SESSION[$name]))
    {
        if(!empty($name))
        {
            if(!empty($msg))
            {
                unset($_SESSION[$name]);

                $_SESSION[$name] = $msg;
            }

            echo $_SESSION[$name];

            unset($_SESSION[$name]);
        }
        
    }else
    {
        unset($_SESSION[$name]);
    }
}