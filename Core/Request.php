<?php
namespace Core;


class Request {

    public function __construct()
    {
        unset($_REQUEST['PHPSESSID']);
        foreach ($_REQUEST as $key => $value) {
        $this->{$key} = htmlspecialchars(addcslashes(trim($value), '%_'));
    }
    }
    }
