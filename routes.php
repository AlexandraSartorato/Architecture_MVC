<?php
use Core\Router;

Router::connect('/', ['controller' => 'AppController', 'action' => 'index']);
Router::connect('/user', ['controller' => 'UserController', 'action' => 'index']);
Router::connect('/user/add', ['controller' => 'UserController', 'action' => 'add']);
Router::connect('/user/show', ['controller' => 'UserController', 'action' => 'show']);
Router::connect('/user/register', ['controller' => 'UserController', 'action' => 'register']);
Router::connect('/user/registerAction', ['controller' => 'UserController', 'action' => 'registerAction']);