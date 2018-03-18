<?php
namespace Core;

class Router {
 private static $routes;

 public static function connect ($url, $route) {
   self::$routes[$url] = $route;
 }
 public static function get ($url) {
     if(array_key_exists($url, Router::$routes)){
         Router::$routes[$url];
         return Router::$routes[$url];
     }else{
         $error=array(
            'controller' => 'ErrorController',
            'action' => 'error'
        );
         return $error;
     }
 }
}
