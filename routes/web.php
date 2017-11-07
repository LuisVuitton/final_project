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


Route::get('/test','testController@index');

Route::get('/create','testController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'UserController@user_info');

Route::post('/home', 'UserController@updateUser')->name('update');

Route::get('/places', 'HomeController@places');

