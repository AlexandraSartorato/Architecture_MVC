<?php
namespace Controller;

use \Core\Controller;
use \Model\TimelineModel;
use \Core\Request;
use \Core\PDO;

class TimelineController extends Controller{

    public function watched(){
        $this->render('watched');
    }
}