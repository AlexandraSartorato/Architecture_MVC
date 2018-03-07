<?php
namespace Controller;

use \Core\Controller;
use \Model\FilmModel;
use \Core\Request;
use \Core\PDO;


class FilmController extends Controller{
    private $films;

    public function display(){
        $film= new FilmModel($this->params);
        $films=$film->get_all_info();
        $this->render('display', array('films'=> $films));

    }

}