<?php
namespace Controller;

use \Core\Controller;
use \Model\FilmModel;
use \Core\Request;
use \Core\PDO;
use Model\GenreModel;


class FilmController extends Controller{
    private $films;

    public function display(){
        $film= new FilmModel($this->params);
        $films=$film->get_all_info();
        $this->render('display', array('films'=> $films));
    }

    public function add(){
        $this->render('add');
    }

    public function addAction(){
        $film= new FilmModel($this->params);
        $film->save();
    }
    public function detail(){
        $film=new FilmModel($this->params);
        $details=$film->get_info($_GET['id']);
        $genre=new GenreModel($this->params);
        $genre_details=$genre->get_info($details[0]['id_genre']);
        $this->render('details', array('details'=>$details,
        'genre_details'=>$genre_details));
    }

    public function update(){
        $film = new FilmModel($this->params);
        $details=$film->get_info($_GET['id']);
        $this->render('update', array('details'=>$details));
    }
    public function updateAction(){
        $film= new FilmModel($this->params);
        $film->update_info($_GET['id']);
    }
    public function destroy(){
        $user = new FilmModel($this->params);
        $user->deleted($_GET['id']);
        $this->render('status');
        //a faire passer l id ici
    }
}