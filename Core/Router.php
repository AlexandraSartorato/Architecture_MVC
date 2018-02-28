<?php
namespace Core;

class Router {
 private static $routes;

 public static function connect ($url, $route) {
   self::$routes[$url] = $route;
 }
 public static function get ($url) {
     //require dans core et appeller router::get rajouter le mot controller
    // require_once('routes.php');
     if(array_key_exists($url, Router::$routes)){
         return Router::$routes[$url];
     }else{
         exit('404');
     }
 // retourne un tableau associatif contenant
 // + le controller a instancier
 // + la méthode du controller a appeler
 // + un tableau contenant les paramètres à passer à la méthode du
//controller
 }
}
