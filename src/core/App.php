<?php

namespace Core;

class App
{


    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
        
    }
    public function run()
    {
        $this->router->resolve();
    }
}
