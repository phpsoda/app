<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPSoda\Application;

/**
 * @var Application $app
 */
$app = require_once __DIR__.'/../bootstrap/app.php';

$response = $app->get('router')->handle(\PHPSoda\Http\Request::createFromGlobals());
$response->send();
