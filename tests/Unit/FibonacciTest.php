<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Library\Fibonacci;

class FibonacciTest extends TestCase
{

    public function testNumbersTest()
    {
        $this->assertEquals(Fibonacci::run(5), 3);
        $this->assertEquals(Fibonacci::run(10), 34);
        $this->assertEquals(Fibonacci::run(1), 0);
    }

}
