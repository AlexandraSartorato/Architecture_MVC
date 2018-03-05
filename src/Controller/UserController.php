<?php
namespace Controller;

use \Core\Controller;
use \Model\UserModel;
use \Core\Request;
use \Core\PDO;

class UserController extends Controller
{
    public $id;
    public $info;

    public function add(){
        echo "okkk";
    }
    public function show(){
        $this->render('show');
    }

    public function register(){
        $this->render('register');
    }

    public function profil(){

        $user = new UserModel($this->params);
        $info=$user->get_info();
        $this->render('profil', array('info'=> $info));

        //a faire passer l id ici
    }

    public function destroy(){

        $user = new UserModel($this->params);
        $user->deleted();
        $this->render('status');

        //a faire passer l id ici
    }
    public function registerAction(){

        $user = new UserModel($this->params);
        $user->save();
        //var_dump($user);
        //if (!$user->id) {
        //self::$_render = "Votre compte a été créé." . PHP_EOL;
    //}
        /*$a = new UserModel();
        $a->create($this->request->password, $this->request->email);*/

    }
    public function login(){
        echo "ok";
    }
}
