<?php
namespace Core;

class Core {
    //run pas de param ,creation de routes
    public function run()
    {   require_once('routes.php');
        $route=array();
        $path= explode(DIRECTORY_SEPARATOR, trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
        foreach($path as $key)
        {
            $tmp= trim($key);
            if($tmp!='')
            {
                array_push($route, $tmp);
            }
        }
        array_shift($route);
        $final_route= implode (DIRECTORY_SEPARATOR ,$route);
        $uri = DIRECTORY_SEPARATOR. $final_route;
        return $a= Router::get($uri);

    }
}
