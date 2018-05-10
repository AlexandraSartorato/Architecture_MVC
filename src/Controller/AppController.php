<?php
namespace Controller;
use Core\Controller;
class AppController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
}
