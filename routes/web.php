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
Route::get('/search','BookController@search');
Route::get('/book','BookController@show');
Route::get('/discount','BookController@getDiscountPriceForm');
Route::get('/discountpercent','BookController@getDiscountPricePercent');