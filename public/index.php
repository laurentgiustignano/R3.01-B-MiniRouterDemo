<?php
require_once '../Router/Router.php';
require_once '../Exceptions/RouteNotFoundException.php';

$router = new Router();

$router->register('/', function() {
  $title = "Home Page";
  require '../views/homepage.php';
});

$router->register('/about', function() {
  $title = "A Propos";
  require '../views/about.php';
});

$router->register('/404', function() {
  $title = "404 Not Found";
  require '../views/404.php';
});


try {
  echo $router->run($_SERVER['REQUEST_URI']);
}
catch(RouteNotFoundException $eee) {
  header('Location: /404');
}
