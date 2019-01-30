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

// Create Blog
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');

// Show spesifik blog
Route::get('/blog/{id}', 'BlogController@show');

//Edit
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::put('/blog/{id}', 'BlogController@update');

// Delete Blog
Route::delete('/blog/{id}', 'BlogController@destroy');
