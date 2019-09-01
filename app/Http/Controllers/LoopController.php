<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Library\Divisible;

class LoopController extends Controller
{
    public function index()
    {
        echo "<pre>";
        foreach(range(1,20) as $number)
        {
            $divisbleByThree = Divisible::isDivisible($number, 3);
            $divisbleByFive = Divisible::isDivisible($number, 5);

            if($divisbleByThree && $divisbleByFive){
                echo "FizzBuzz\n";
            } elseif ($divisbleByThree) {
                echo "Fizz\n";
            } elseif ($divisbleByFive) {
                echo "Buzz\n";
            } else {
                echo "$number\n";
            }
        }
        echo "</pre>";
    }
}
