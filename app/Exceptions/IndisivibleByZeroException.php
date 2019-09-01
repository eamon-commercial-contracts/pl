<?php

namespace App\Exceptions;

use Exception;

class IndivisbleByZeroException extends Exception
{
    protected $message = 'Dividend or divisor is indivisble by zero';

    public function __construct()
    {
        parent::__construct();
    }
}
