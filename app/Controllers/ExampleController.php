<?php

namespace App\Controllers;

use PHPSoda\Http\JsonResponse;
use PHPSoda\Http\Request;

class ExampleController
{
    public function index(Request $request)
    {
        return new JsonResponse('Welcome to PHPSoda!');
    }
}