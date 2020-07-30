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

Route::get('/car', 'CarController@allcars');
Route::get('/car', 'CarController@particularcar');
Route::get('/car', 'CarController@newcar');


Route::get('/newcar', 'CarController@newCarForm');
Route::get('/car/{id}/reviews', 'CarController@carreviews');
