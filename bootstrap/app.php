<?php

use App\Services\ExampleService;

require '../routing/web.php';

// Load configurations and etc. here

session_start();

$app = PHPSoda\Application::getInstance();

$app->set(ExampleService::class, function () {
    return new ExampleService();
});

print_r($app->get(ExampleService::class)->serve());

return $app;
