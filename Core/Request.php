<?php
namespace Core;


class Request {

    public function __construct()
    {
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
