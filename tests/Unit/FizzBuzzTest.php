<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Exceptions\IndivisbleByZeroException;
use \App\Library\Divisible;

class FizzBuzzTest extends TestCase
{

    /**
     * @expectedException IndivisbleByZeroException;
     */
    public function testThrowExceptionOnDividendTest()
    {
        $this->expectException(IndivisbleByZeroException::class);
        Divisible::isDivisible(0, 3);
    }

    /**
     * @expectedException IndivisbleByZeroException;
     */
    public function testThrowExceptionOnDivisorTest()
    {
        $this->expectException(IndivisbleByZeroException::class);
        Divisible::isDivisible(3, 0);
    }

    public function testIsDivisbleTest()
    {
        $this->assertTrue(Divisible::isDivisible(3, 3));
    }

    public function testIsNotDivisbleTest()
    {
        $this->assertFalse(Divisible::isDivisible(5, 3));
    }

}
