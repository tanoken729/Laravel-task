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



Route::get('/login', 'LoginController@index');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@post');

Route::get('todos','TodosController@index');
Route::post('todos','TodosController@store');
Route::patch('/todos/{id}','TodosController@update');
Route::delete('/todos/{id}','TodosController@remove');
