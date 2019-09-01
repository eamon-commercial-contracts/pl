<?php


namespace App\Exceptions;

use Exception;

class PropertyDoesNotExistsException extends Exception
{
    protected $message = 'Property does not exists';

    public function __construct()
    {
        parent::__construct();
    }

}
