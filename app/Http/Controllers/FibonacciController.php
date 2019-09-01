<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Library\Fibonacci;

class FibonacciController extends Controller
{
    public function index()
    {
        echo "<pre>";
        echo Fibonacci::run(5) . "\n";
        echo Fibonacci::run(10) . "\n";
        echo Fibonacci::run(1) . "\n";
        echo "</pre>";
    }
}
