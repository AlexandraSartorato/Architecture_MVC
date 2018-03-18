<?php
namespace Controller;

use \Core\Controller;
use \Model\FilmModel;
use \Model\TimelineModel;
use \Core\Request;
use \Core\PDO;

class TimelineController extends Controller{
    private $film_details;

    public function watched(){
        $watched=new TimelineModel($this->params);
    if(!empty($_SESSION['id'])) {
    $details = $watched->get_info($_SESSION['id']);
    $film = new FilmModel($this->params);
    $film_details = [];
    for ($i = 0; $i < count($details); $i++) {
        $film_details[] = $film->get_info($details[$i]['id_film']);
    }
    $this->render('watched', array('details' => $details, 'film_details' => $film_details));
    }else{
    $this->render('watched');
    }
    }

    public function add(){
        $film=new FilmModel($this->params);
        $film_info=$film->get_all_info();
        $this->render('add', array('film_info'=>$film_info));
    }

    public function addAction(){
        $watched=new TimelineModel($this->params);
        $watched->save();
    }
}