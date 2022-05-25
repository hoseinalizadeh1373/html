<?php

function load_models($filename){

    try {
        $path = __DIR__."/$filename.php";
        if(!file_exists($path)){
            require_once($path);
        }

    } catch (Exception $e) {
        $e->getMessage();
    }
}