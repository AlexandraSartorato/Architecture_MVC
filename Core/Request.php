<?php
namespace Core;


class Request {

    public function __construct()
    {

        //var_dump($_SESSION);
        unset($_REQUEST['PHPSESSID']);
        foreach ($_REQUEST as $key => $value) {
        $this->{$key} = htmlspecialchars(addcslashes(trim($value), '%_'));
    }
    }
    /*public function getQueryParams(){
        foreach ($_REQUEST as $key => $value) {
            $this->{$key} = htmlspecialchars(addcslashes(trim($value), '%_'));
        }
    }*/
    }
