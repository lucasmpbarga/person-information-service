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

Route::get('/', function () {
    return view('welcome');
});

Route::get('person/', 'PersonController@index');
Route::post('person/', 'PersonController@create');
Route::get('person/{name}', 'PersonController@show');
Route::put('person/{id}', 'PersonController@update');
Route::delete('person/{id}', 'PersonController@destroy');
