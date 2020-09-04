<?php

use PHPSoda\Routing\Route;

Route::get('/', 'ExampleController@index');
Route::create('/create', 'ExampleController@create', ['GET', 'POST'], ['example']);
