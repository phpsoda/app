<?php

namespace App\Controllers;

use PHPSoda\Http\JsonResponse;
use PHPSoda\Http\Request;

class ExampleController
{
    public function index(Request $request)
    {
        return new JsonResponse('Get request to ExampleController@index.');
    }
    public function create(Request $request)
    {
        return new JsonResponse($request->request, 201);
    }
}