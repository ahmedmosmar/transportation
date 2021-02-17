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
    return view('auth.login');
});

Route::get('/pages/', 'PostController@index')->name('index');
Route::get('/pages/post', 'PostController@create')->name('post');


Route::resource('pages_user','Controller_of_users');

Route::resource('pages_station','Controller_of_station');
Route::resource('page_sub_station','Controller_of_sub_station');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
