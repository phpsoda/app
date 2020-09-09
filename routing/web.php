<?php

use PHPSoda\Application;
use PHPSoda\Http\JsonResponse;
use PHPSoda\Routing\Router;

/**
 * @var Router $router
 */
$router = Application::getInstance()->get(Router::class);

$router->get('/', 'ExampleController@index');
$router->get('/example/:id', 'ExampleController@show');
$router->createRoute('/create', ['GET', 'POST'], 'ExampleController@create');
$router->get('/users/:id/:action', function ($id, $action, $request) {
    return new JsonResponse([
        'request' => $request,
        'id' => $id,
        'action' => $action,
    ]);
});
