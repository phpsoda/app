<?php

namespace App\Gates;

use PHPSoda\Http\Request;

class AuthGate
{
    public function handle(Request $request)
    {
        $header = $request->server->get('HTTP_AUTHORIZATION');

        if ($header && substr($header, 0, 7) === 'Bearer ') {
            $token = substr($header, 7);

            if ($token === 'test') {
                return true;
            }
        }

        return false;
    }
}