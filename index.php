<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>My Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
</body>
</html>
<?php
define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new Core\Core();
$a = $app->run();
//mettre les instances de controller dans le core run
$controller = 'Controller\\'.$a['controller'];
$c= new $controller;
//$c = new Controller\UserController();
//$c = new Controller.DIRECTORY_SEPARATOR.{$a['controller']}();
$c-> {$a['action']}();


?>
