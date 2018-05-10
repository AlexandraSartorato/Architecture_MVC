<?php session_start();
define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new Core\Core();
$a = $app->run();
//mettre les instances de controller dans le core run
$controller = 'Controller\\'.$a['controller'];
$c= new $controller;
$c-> {$a['action']}();
