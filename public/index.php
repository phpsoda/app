<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * @var \PHPSoda\Application $app
 */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$response = $app->handleRequest(\PHPSoda\Http\Request::createFromGlobals());
$response->send();
