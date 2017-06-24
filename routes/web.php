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

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'WelcomeController@index');

Route::auth();

Route::get('/logout', 'LoginController@logout');

Route::get('/home', 'HomeController@index');

Route::post('/users/{user}/meals', 'MealsController@store');

Route::resource('/meals', 'MealsController');

Route::post('/meals/{meal}/foods', 'FoodsController@store');



