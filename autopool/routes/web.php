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
    return view('home');
});

Route::get('faq', 'NavigationController@faq');
Route::get('/logout', 'NavigationController@logout');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('/home');
Route::get('/profile', 'ProfileController@index')->name('/profile');
Route::post('/profile', 'ProfileController@store');
Route::get('/register/final', 'FinalRegisterController@index')->name('/register/final');
Route::post('/register/final', 'FinalRegisterController@store');





