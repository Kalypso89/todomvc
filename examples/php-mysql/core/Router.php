<?php

namespace Core;

class Router
{
    private $controller = 'Site';
    private $method = 'home';
    private $param = [];

    public function __construct()
    {
        $router = $this->getUrl();

        if (file_exists('app/controllers/' . ucfirst($router[0]) . '.php')) {
            echo 'The file exists';
        } else {
            echo 'The file doesn\'t exist';
        }
    }
    public function getUrl()
    {
        $url = explode('/', filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $url;
    }
}
