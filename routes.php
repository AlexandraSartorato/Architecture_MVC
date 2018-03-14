<?php
use Core\Router;

Router::connect('/', ['controller' => 'AppController', 'action' => 'index']);
Router::connect('/user', ['controller' => 'UserController', 'action' => 'index']);
Router::connect('/user/add', ['controller' => 'UserController', 'action' => 'add']);
Router::connect('/user/show', ['controller' => 'UserController', 'action' => 'show']);
Router::connect('/user/register', ['controller' => 'UserController', 'action' => 'register']);
Router::connect('/user/registerAction', ['controller' => 'UserController', 'action' => 'registerAction']);
Router::connect('/user/login', ['controller' => 'UserController', 'action' => 'login']);
Router::connect('/user/profil', ['controller' =>'UserController', 'action'=>'profil']);
Router::connect('/user/delete', ['controller' =>'UserController', 'action'=>'destroy']);
Router::connect('/user/update', ['controller' =>'UserController', 'action'=>'update']);
Router::connect('/user/updateAction', ['controller' =>'UserController', 'action'=>'updateAction']);
Router::connect('/movies/display', ['controller' =>'FilmController', 'action'=>'display']);
Router::connect('/movies/add', ['controller' =>'FilmController', 'action'=>'add']);
Router::connect('/movies/addAction', ['controller' =>'FilmController', 'action'=>'addAction']);
Router::connect('/movies/details', ['controller' =>'FilmController', 'action'=>'detail']);
Router::connect('/movies/update', ['controller' =>'FilmController', 'action'=>'update']);
Router::connect('/movies/updateAction', ['controller' =>'FilmController', 'action'=>'updateAction']);
Router::connect('/movies/delete', ['controller' =>'FilmController', 'action'=>'destroy']);
Router::connect('/movies/watched', ['controller' =>'TimelineController', 'action'=>'watched']);
Router::connect('/genre/display', ['controller' =>'GenreController', 'action'=>'display']);
Router::connect('/genre/add', ['controller' =>'GenreController', 'action'=>'addAction']);
Router::connect('/genre/update', ['controller' =>'GenreController', 'action'=>'update']);
Router::connect('/genre/updateAction', ['controller' =>'GenreController', 'action'=>'updateAction']);
Router::connect('/genre/delete', ['controller' =>'GenreController', 'action'=>'destroy']);