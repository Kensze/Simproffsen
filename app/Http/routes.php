<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@home');

Route::get('/cart', 'CartController@index');

Route::post('/cart', 'CartController@index');

Route::post('/cart/update', 'CartController@update');


Route::get('/product', 'ProductController@index');

Route::post('/product/add', 'ProductController@add');


