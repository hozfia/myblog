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

Route::get('/create', 'artcontrol@create');
Route::get('/show/{id}', 'artcontrol@show');
Route::post('/create', 'artcontrol@store');
Route::get('/index', 'artcontrol@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
