<?php
namespace Controller;

use \Core\Controller;
use \Model\UserModel;
use \Core\Request;
use \Core\PDO;

class UserController extends Controller
{
    public function add(){
        echo "okkk";
    }
    public function show(){
        $this->render('show');
    }

    public function register(){
        $this->render('register');
    }

    public function registerAction(){

        $a = new UserModel;
        $a -> create($this->request->password, $this->request->email);

    }
}
