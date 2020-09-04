<?php

namespace App\Controllers;

use PHPSoda\Http\JsonResponse;
use PHPSoda\Http\Request;
use PHPSoda\Http\Response;

class ExampleController
{
    public function index(Request $request)
    {
        return new Response('Get request to ExampleController@index.');
    }
    public function create(Request $request)
    {
        return new JsonResponse([
            'message' => 'Created!',
        ], 201);
    }
}
