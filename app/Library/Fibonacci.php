<?php


namespace App\Library;

class Fibonacci
{

    // runs the sequence
    public static function run($n): int
    {
        // start off with the first 2 numbers
        $n1 = 0;
        $n2 = 1;
        $n3 = 0;

        // loop forward to fetch next numbers
        $step = 0;
        while ($step < $n){

            // if step reaches the number then return value
            if(($step+1) == $n){
                return $n1;
            }

            // adds next number in sequence
            $n3 = $n1 + $n2;

            // this is our fibonacci number
            $n1 = $n2;

            // store for next loop
            $n2 = $n3;
            $step++;
        }
    }

}
