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

Route::get('todos', 'TodosController@index');

Route::get('todos/create', 'TodosController@create');

Route::post('todos', 'TodosController@store');

Route::get('todos/{id}/edit', 'TodosController@edit');

Route::put('todos/{id}', 'TodosController@update');
