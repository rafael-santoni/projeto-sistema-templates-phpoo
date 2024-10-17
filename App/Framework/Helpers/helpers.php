<?php

use App\Framework\Classes\Engine;
use App\Framework\Classes\Router;

function path() {
  return $_SERVER['REQUEST_URI'];
}

function request() {
  return strtolower($_SERVER['REQUEST_METHOD']);
}

function routerExecute() {
  try {
    
    $routes = require '../App/Routes/routes.php';
    $router = new Router;
    $router->execute($routes);

  } catch (\Throwable $th) {
    var_dump($th->getMessage());
  }
}

function view(string $view, array $data = []) {
  try {
    
    $engine = new Engine;
    echo $engine->render($view, $data);
    
  } catch (\Throwable $th) {
    var_dump($th->getMessage());
  }
}

function redirect(string $to) {
  return header("Location: {$to}");
}