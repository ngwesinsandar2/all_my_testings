<?php

use Source\Controllers\StudentController;

$routes = [
  '/index' => [StudentController::class, 'index'],
  '/create' => [StudentController::class, 'create'],
  '/store' => [StudentController::class, 'store'],
  '/detail' => [StudentController::class, 'detail'],
  '/edit' => [StudentController::class, 'edit'],
  '/update' => [StudentController::class, 'update'],
  '/destroy' => [StudentController::class, 'destroy'],
];

if (array_key_exists('PATH_INFO', $_SERVER)) {
  $route = $_SERVER['PATH_INFO'];
} else {
  $route = "/index";
}

if (array_key_exists($route, $routes)) {
  $controller = $routes[$route][0];
  $method = $routes[$route][1];
} else {
  notFound();
}

$homecontroller = new $controller();
$homecontroller->$method();
