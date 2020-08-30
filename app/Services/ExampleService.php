<?php

namespace App\Services;

use PHPSoda\Patterns\Singleton;

class ExampleService extends Singleton
{
    public function serve()
    {
        echo 'ExampleService serving!';
    }
}
