<?php
namespace Core;


class Request
{

    public function __construct()
    {
        foreach ($_POST as $key => $value) {
            $this->{$key} = htmlspecialchars(addcslashes(trim($value), '%_'));
        }
        foreach ($_GET as $key => $value) {
            $this->{$key} = htmlspecialchars(addcslashes(trim($value), '%_'));
        }
    }
}
