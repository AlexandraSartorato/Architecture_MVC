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
        $info=$user->get_info($_SESSION['id']);
        $this->render('profil', array('info'=> $info));

        //a faire passer l id ici
    }

    public function destroy(){

        $user = new UserModel($this->params);
        $user->deleted($_SESSION['id']);
        $this->render('status');
        //a faire passer l id ici
    }
    public function registerAction(){
        $user = new UserModel($this->params);
        $this->id=$user->insert_user();
        $_SESSION["id"]=$this->id;
        /*$a = new UserModel();
        $a->create($this->request->password, $this->request->email);*/

    }

    public function update(){
        $user = new UserModel($this->params);
        $info=$user->get_info($_SESSION['id']);
        $this->render('update', array('info'=> $info));
    }

    public function updateAction(){
        $user = new UserModel($this->params);
        $user->update_info($_SESSION['id']);
    }

    public function login(){
        $this->render('login');
    }
    public function logAction(){
        $user=new UserModel($this->params);
        $id=$user->log();
        if($id==false){
            $this->render('index');
        }else{
            $_SESSION['id']=$id;
            $info=$user->get_info($_SESSION['id']);
            $this->render('profil', array('info'=>$info));

        }
    }

    public function logout(){
        session_destroy();
        $this->render('index');
        exit;
    }

}
