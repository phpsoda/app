<?php

use App\Services\ExampleService;

session_start();

$app = \PHPSoda\Application::initialize(dirname(__DIR__));

$app->set('router', new \PHPSoda\Routing\Router());

$app->loadConfig('app');

$app->set(ExampleService::class, function () {
    return new ExampleService();
});

require '../routing/web.php';

return $app;
