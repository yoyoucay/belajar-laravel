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

// Pre
Route::group(['prefix' => 'blog'], function(){

  Route::match(['get','post'], '/testing', 'BlogController@testing')->name('test');

  Route::get('/', 'BlogController@index');

  // Create Blog
  Route::get('/create', 'BlogController@create');
  Route::post('/', 'BlogController@store');

  // Show spesifik blog
  Route::get('/{id}', 'BlogController@show');

  //Edit
  Route::get('/{id}/edit', 'BlogController@edit');
  Route::put('/{id}', 'BlogController@update');

  // Delete Blog
  Route::delete('/{id}', 'BlogController@destroy');

  Route::get('/pagination', 'BlogController@viewPagination');
});
