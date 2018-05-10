<?php

namespace Core;

Class Controller
{

    private static $_render;

    public function __construct()
    {
        unset($_COOKIE['PHPSESSID']);
        $this->request=new Request();
        $this->params= get_object_vars($this->request);
    }

    protected function render($view, $scope=[])
    {
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', str_replace('Controller', '', basename(get_class($this))), $view]) . '.php';
        $final = str_replace('\\', '', $f);
        if (file_exists($final))
        {
            ob_start();
            include($final);
            $view = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View','index']) . '.php');
            self::$_render = ob_get_clean();
            echo self::$_render;
        }
    }
}
