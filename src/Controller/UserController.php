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

    public function register()
    {
        $this->render('register');
    }

    public function profil()
    {
        $user = new UserModel($this->params);
        if(!empty($_SESSION['id'])) {
            $info = $user->get_info($_SESSION['id']);
            $this->render('profil', array('info' => $info));
        }else{
            $this->render('profil');
        }
    }

    public function destroy()
    {
        $user = new UserModel($this->params);
        if (isset($_SESSION['id'])) {
            $user->deleted($_SESSION['id']);
        }
        $this->render('status');
    }

    public function registerAction()
    {
        $user = new UserModel($this->params);
        $this->id=$user->insert_user();
        $_SESSION["id"]=$this->id;
        if(isset($_SESSION['id'])){
            echo "ok";
        }
    }

    public function update()
    {
        $user = new UserModel($this->params);
        if(!empty($_SESSION['id'])) {
            $info = $user->get_info($_SESSION['id']);
            $this->render('update', array('info' => $info));
        }else{
            $this->render('update');

        }
    }

    public function updateAction()
    {
        $user = new UserModel($this->params);
        if(isset($_SESSION['id'])) {
            $user->update_info($_SESSION['id']);
            echo "ok";
        }
    }

    public function login()
    {
        $this->render('login');
    }

    public function logAction()
    {
        $user=new UserModel($this->params);
        $id=$user->log();
        if($id==false){
            // $this->render('index');
        }else{
            $_SESSION['id']=$id;
            echo "ok";

        }
    }

    public function logout()
    {
        session_destroy();
        $this->render('index');
        exit;
    }

}
