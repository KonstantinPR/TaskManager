<?php

function __autoload($class_name)
{
    $array_path = array(
        '/components/',
        '/models/',
    );

    $array_path2 = array(
        '/components/',
        '/controllers/',
    );



        foreach ($array_path as $path) {
            $path = ROOT . $path . $class_name . '.php';
            if (is_file($path)) {
                include_once $path;
            }
        }

    foreach ($array_path2 as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }


    }