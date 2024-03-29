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

Route::get('/welcome', 'TaskController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Route::get('tasks/create','TaskController@create');
Route::post('tasks/create','TaskController@store');*/

Route::resource('tasks','TaskController');

