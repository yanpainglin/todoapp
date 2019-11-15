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

Route::get('/todolist', 'PostController@todolist');
Route::get('/todolist/view/{id}', 'PostController@detail');

Route::get('/todolist/create', 'PostController@create');
Route::post('/todolist/create', 'PostController@store');

Route::get('/todolist/edit/{id}', 'PostController@edit');
Route::post('/todolist/update/{id}', 'PostController@update');

Route::get('/todolist/delete/{id}', 'PostController@delete');
Route::get('/todolist/complete/{id}', 'PostController@complete');


