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

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index')->middleware('auth');
Route::get('/profile/edit', 'ProfileController@edit')->middleware('auth');
Route::post('/profile/edit', 'ProfileController@store')->middleware('auth');
Route::post('/post/create', 'PostController@create')->middleware('auth');
