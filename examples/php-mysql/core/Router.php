<?php

namespace Core;

class Router
{
    public function __construct()
    {
        $router = $this->getUrl();
        echo '<pre>';
        print_r($router);
    }
    public function getUrl()
    {
        $url = explode('/', filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $url;
    }
}
