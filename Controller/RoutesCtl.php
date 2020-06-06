<?php

namespace Controller;

use CoffeeCode\Router\Router;

class RoutesCtl
{

    private $router;

    public function __construct()
    {
        $this->router = new Router(BASE);
    }

    public function run(): bool
    {
        $this->router->namespace("Controller");
        $this->router->get("/", "WebSiteCtl:home");
        $this->router->post("/search", "WebSiteCtl:search"); 

        $this->router->group("summoner")->namespace("Controller");
        $this->router->get("/{server}/{name}", "SummonerCtl:getSummonerByName");

        $this->router->group("match")->namespace("Controller");
        $this->router->get("/{id}", "WebSiteCtl:teste");

        try {
            $this->router->dispatch();
            if ($this->router->error())
                throw new \Exception('Erro de rota: ' . $this->router->error());
            return true;
        } catch (\Exception $e) {
            $this->router->redirect("/error/{$this->router->error()}");
            return false;
        }
    }
}
