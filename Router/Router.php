<?php

require_once '../Exceptions/RouteNotFoundException.php';

class Router {

  private array $routes = [];

  public function register(string $path, callable $action) : void {
    $this->routes[$path] = $action;
  }

  /**
   * @throws Exception
   */
  public function run(string $uri) : mixed {
    $path = explode('?', $uri)[0];
    $action =  $this->routes[$path] ?? null;

    if(!is_callable($action)) {
      throw new RouteNotFoundException("Route not found");
    }
    return $action();
  }
}