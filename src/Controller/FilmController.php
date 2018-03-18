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
        $genre= new GenreModel($this->params);
        $genre_list=$genre->get_all_info();
        $this->render('add', array('genre_list'=>$genre_list));
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
        $genre= new GenreModel($this->params);
        $genre_list=$genre->get_all_info();
        $this->render('update', array('details'=>$details,
            'genre_list'=>$genre_list));
    }
    public function updateAction(){
        $film= new FilmModel($this->params);
        $film->update_info($_GET['id']);
    }
    public function destroy(){
        $film = new FilmModel($this->params);
        $film->deleted($_GET['id']);
        $this->render('status');
    }
    public function search_movies(){
        $film = new FilmModel($this->params);
        $result=$film->search();
        $this->render('search', array('films'=>$result));
    }

}