<?php

use PHPSoda\Routing\Route;

$app = PHPSoda\Application::getInstance();

Route::get('/', 'ExampleController@index');

return $app;
