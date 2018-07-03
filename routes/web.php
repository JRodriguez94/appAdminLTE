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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('users', ['as' => 'users.index', 'uses' => 'UsersController@index']);

Route::get('users/create', ['as' => 'users.create', 'uses' => 'UsersController@create']);

Route::post('users', ['as' => 'users.store', 'uses' => 'UsersController@store']);

Route::get('users/{id}', ['as' => 'users.show', 'uses' => 'UsersController@show']);

Route::get('users/{id}/edit', ['as' => 'users.edit', 'uses' => 'UsersController@edit']);

Route::put('users/{id}', ['as' => 'users.update', 'uses' => 'UsersController@update']);

Route::delete('users/{id}', ['as' => 'users.destroy', 'uses' => 'UsersController@destroy']);

