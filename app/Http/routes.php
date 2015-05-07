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
Route::get('/checkout', 'PageController@checkout');
Route::get('/confirm', 'PageController@confirm');


Route::controller('cart', 'CartController');
Route::controller('product', 'ProductController');
Route::controller('category', 'CategoryController');


