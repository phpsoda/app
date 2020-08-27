<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

if(!headers_sent()) {
    header('Content-Type', 'application/json');
}

print_r(json_encode($app));
