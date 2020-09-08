<?php

use App\Services\ExampleService;
use PHPSoda\Application;

session_start();

Application::initialize(dirname(__DIR__));
$app = Application::getInstance();

$app->loadConfig('app');

$app->set(ExampleService::class, function () {
    return new ExampleService();
});

require '../routing/web.php';

return $app;
