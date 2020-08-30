<?php

require '../routing/web.php';

// Load configurations and etc. here

session_start();

$app = PHPSoda\Application::getInstance();

$app->singleton(\App\Services\ExampleService::class);

return $app;
