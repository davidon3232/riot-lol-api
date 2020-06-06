<?php

namespace Controller;
use League\Plates\Engine;
use Lib;
use CoffeeCode\Router\Router;

class Controller{
    private $view;
    protected $nameTemplate,$data;

    public function Render() : void{
        $this->view = new Engine('view');
        if($this->data){
            $this->view->addData($this->data);
        }
        echo $this->view->render($this->nameTemplate);
    }
}