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


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admins','HomeController')->except('show');/*
Route::get('/create', 'HomeController@create')->name('create');
Route::post('/store', 'HomeController@store');*/
/*Route::get('/admin','AdminController@index')->name('admin');*/
