<?php
function my_autoload ($pClassName)
{

    $file=str_replace('\\', DIRECTORY_SEPARATOR, $pClassName). '.php';
    if(file_exists('./src'.DIRECTORY_SEPARATOR.$file))
    {
        include('./src'.DIRECTORY_SEPARATOR.$file);
    }else{
        include($file);
    }
}
spl_autoload_register("my_autoload");
