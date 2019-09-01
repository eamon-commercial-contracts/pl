<?php


namespace App\Library;

use App\Exceptions\IndivisbleByZeroException;


class Divisible
{

    public static function isDivisible($dividend, $divisor): bool
    {
        // as it is division search for zero input
        if($divisor <= 0 or $dividend <= 0) {
            throw new IndivisbleByZeroException;
        }

        // check to see if you get a remainder
        $result = $dividend % $divisor;

        // return
        return (0 == $result);
    }

}
