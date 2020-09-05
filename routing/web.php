<?php

use PHPSoda\Routing\Router;

Router::get('/', 'ExampleController@index');
Router::createRoute('/create', 'ExampleController@create', ['GET', 'POST'], ['example']);
