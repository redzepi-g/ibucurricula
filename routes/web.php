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

Route::get('/', [
    'uses' => 'BaseController@index',
    'as' => 'index'
]);

Route::post('/department',[
    'uses' => 'BaseController@next',
    'as' => 'next'
]);
