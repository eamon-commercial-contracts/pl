<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Library\MagicGetterSetter;

class MagicController extends Controller
{
    public function index()
    {
        $magic = new MagicGetterSetter;

        echo $getter = $magic->key;
        $magic->key = 'test';
        echo $getter = $magic->key;
    }
}
