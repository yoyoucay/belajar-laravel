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

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::put('/blog/{id}', 'BlogController@update');
