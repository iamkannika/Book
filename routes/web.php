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
    return view('index');
});
Route::get('/search',function(){
    return view('search');
});
Route::get('/list','InfoBookController@list');


Route::post('/search-detail','InfoBookController@searchDetail')->name('search.detail');
Route::post('/search-sale','InfoBookController@discount')->name('search.sale');
Route::get('/bill','InfoBookController@sale');


// Route::get('/search','BookController@search');
// Route::get('/book','BookController@show');
// Route::get('/discount','BookController@getDiscountPriceForm');
// Route::get('/discountpercent','BookController@getDiscountPricePercent');
// Route::get('/discountbaht','BookController@getDiscountPriceBaht');