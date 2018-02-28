<?php
namespace Core;
use PDO;


class Database{

public static function connect(){
try
{
   $bdd = new PDO('mysql:host=localhost:8889;dbname=pie_database;charset=utf8', 'root', 'root');
   return $bdd;
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
}
}



?>
