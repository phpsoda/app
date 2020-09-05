<?php

use App\Services\ExampleService;

session_start();

$basePath = dirname(__DIR__);

$app = new \PHPSoda\Application($basePath);

$app->set(ExampleService::class, function () {
    return new ExampleService();
});

return $app;
