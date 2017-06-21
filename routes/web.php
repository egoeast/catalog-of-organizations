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

Route::get('/test','KatalogController@test');

Route::get('/katalog','KatalogController@show');

Route::get('/category/{id}','KatalogController@category');

Route::get('/edit/{id}','KatalogController@edit');

Route::get('/show_landing/{id}','KatalogController@show_landing');

Route::get('/shop_list','KatalogController@shop_list');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
