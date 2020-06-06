<?php

namespace Controller;
use Lib;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

class WebSiteCtl extends Controller{

    public function __construct()
    {
        $this->view = new Engine('view');   
    }
    public function home() : void{
        echo $this->view->Render('home');
    }

    public function search($data) : void{
        $router = new Router(BASE);
        $region = $data['region'];  
        $name = $data['keyword'];
        $router->redirect("/summoner/{$region}/{$name}");
    }

    public function pageNotFound() : void{
        header('HTTP/1.0 404 Not Found');
        $this->nameTemplate = '404';
        $this->view->render();
    }
}