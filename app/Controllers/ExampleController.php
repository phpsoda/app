<?php

namespace App\Controllers;

use App\Services\ExampleService;
use PHPSoda\Http\JsonResponse;
use PHPSoda\Http\Request;
use PHPSoda\Http\Response;

class ExampleController
{
    /**
     * @var ExampleService
     */
    private $exampleService;

    public function __construct(ExampleService $exampleService)
    {
        $this->exampleService = $exampleService;
    }

    public function index(Request $request)
    {
        return new Response($this->exampleService->serve());
    }
    public function create(Request $request)
    {
        return new JsonResponse([
            'message' => 'Created!',
        ], 201);
    }
}
