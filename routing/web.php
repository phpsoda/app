<?php

use PHPSoda\Routing\Route;

Route::get('/', 'ExampleController@index');
Route::post('/create', 'ExampleController@create', ['example']);
