<?php

function classAutoLoader($class)
{
    //$class=strtolower($class);  da sve pretvori u mala slova
    $the_path="includes/{$class}.php";// ako smo definisali path: $the_path= INCLUDES_PATH.{$class}.php
    /*
    if(file_exists($the_path))
    {
        include($the_path);
    }
    else
    {
        die("this file name {$class}.php was not exists");
    }
    */
    if(is_file($the_path) && !class_exists($class))
    {
        include $the_path;
    }

    spl_autoload_register('classAutoLoader');



    /*function redirect($location)
    {
        header("Location: {$location}");
    }
    */
}
?>