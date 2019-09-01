<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/loop', 'LoopController@index');
Route::get('/fibonacci', 'FibonacciController@index');
Route::get('/magic1', 'MagicController@index');


Route::get('/', function () {

    return view('welcome');
});
