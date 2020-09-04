<?php

namespace App\Gates;

use PHPSoda\Helpers\StringHelper;
use PHPSoda\Http\Request;

class ExampleGate
{
    public function handle(Request $request)
    {
        $header = $request->server->get('HTTP_AUTHORIZATION', '');

        if (StringHelper::startsWith($header, 'Bearer ')) {
            $token = substr($header, 7);

            if ($token === 'test') {
                return true;
            }
        }

        if ($request->query->get('api_token', '') === 'test') {
            return true;
        }

        return false;
    }
}
