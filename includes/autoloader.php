<?php

spl_autoload_register(function($className){
    $file = strtolower(str_replace('BlogPost\\', "", $className).".php");
    $file = str_replace("\\", "/", $file);
    include $file;
});
