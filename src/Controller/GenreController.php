<?php
namespace Controller;

use \Core\Controller;
use \Model\GenreModel;
use \Core\Request;
use \Core\PDO;

class GenreController extends Controller{

   public function display()
   {
       $genre = new GenreModel($this->params);
       $genres = $genre->get_all_info();
       $this->render('display', array('genres' => $genres));
   }
    public function addAction(){
        $genre= new GenreModel($this->params);
        $genre->save();
    }

    public function update(){
        $genre = new GenreModel($this->params);
        $details=$genre->get_info($_GET['id']);
        $this->render('update', array('details'=>$details));
    }
    public function updateAction(){
        $genre= new GenreModel($this->params);
        $genre->update_info($_GET['id']);
    }
    public function destroy(){
        $genre= new GenreModel($this->params);
        $genre->deleted($_GET['id']);
        $this->render('status');
        //a faire passer l id ici
    }


}