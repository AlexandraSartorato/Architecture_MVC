<?php
namespace Controller;
use Core\Controller;
class ErrorController extends Controller{
    public function error(){
        $this->render('404');
    }
}
