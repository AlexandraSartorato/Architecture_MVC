<?php
namespace Controller;

use \Core\Controller;
use Model\FilmModel;
use \Model\TimelineModel;
use \Core\Request;
use \Core\PDO;

class TimelineController extends Controller{
    private $film_details;

    public function watched(){
        $watched=new TimelineModel($this->params);
        $details= $watched->get_info($_SESSION['id']);
        $film=new FilmModel($this->params);
        for($i=0; $i<count($details); $i++) {
            $film_details[] = $film->get_info($details[$i]['id_film']);
        }
        $this->render('watched', array('details'=> $details, 'film_details'=> $film_details));

    }
}