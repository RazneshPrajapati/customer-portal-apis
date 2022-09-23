<?php

class Router
{
  protected $routes = [];
  public function __construct($routes)
  {
    $this->routes = $routes;
  }
  public function direct($url)
  {
    if (array_key_exists($url, $this->routes)) {
      return $this->routes[$url];
    }
  }
}

$routes = [
  '/index.php' => './mock/home.php',
  '/index.php/corporate/broadband' => './mock/corporate-broadband.php',
  '/index.php/corporate/contracts' => './mock/Contracts.php'
];

$router = new Router($routes);

require $router->direct($_SERVER["REQUEST_URI"]);
