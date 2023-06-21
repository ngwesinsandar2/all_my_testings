<?php

use Source\Controllers\StudentController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('students', new Route('/students', ['_controller' => [StudentController::class, 'index']]));

$routes->add('create', new Route('/students/create', ['_controller' => [StudentController::class, 'create']]));

$routes->add('store', new Route('/students/store', ['_controller' => [StudentController::class, 'store']]));

$routes->add('show', new Route('/student/{id}', ['_controller' => [StudentController::class, 'show']]));

$routes->add('edit', new Route('/students/edit/{id}', ['_controller' => [StudentController::class, 'edit']]));

$routes->add('update', new Route('/students/update/{id}', ['_controller' => [StudentController::class, 'update']]));

$routes->add('destroy', new Route('/students/destroy/{id}', ['_controller' => [StudentController::class, 'destroy']]));
