<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$response = new \PHPSoda\Http\JsonResponse(\PHPSoda\Http\Request::createFromGlobals());
$response->send();
