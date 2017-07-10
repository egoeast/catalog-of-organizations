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

//Route::get('/category/{id}','KatalogController@category');

Route::get('/edit/{id}','KatalogController@edit');

Route::get('/card/{slug}','KatalogController@showCard');

//Route::get('/org-list','KatalogController@orgList');


//------------------------------------------------------------------------
Route::get('/category-list','Admin\CategoryController@categoryList');

Route::get('/category-edit/{id}','Admin\CategoryController@edit');

Route::patch('/category-update/{id}', 'Admin\CategoryController@update');

Route::get('/category-create', 'Admin\CategoryController@create');

Route::post('/category-store', 'Admin\CategoryController@store');

Route::get('/category-delete/{id}', 'Admin\CategoryController@delete');
//------------------------------------------------------------------------

Route::get('/org-list','Admin\OrganizationController@orgList');

Route::get('/org-edit/{id}','Admin\OrganizationController@edit');

Route::patch('/org-update/{id}', 'Admin\OrganizationController@update');

Route::get('/org-create', 'Admin\OrganizationController@create');

Route::post('/org-store', 'Admin\OrganizationController@store');

Route::get('/org-delete/{id}', 'Admin\OrganizationController@delete');

//------------------------------------------------------------------------

//Route::patch('/org-update/{id}', 'KatalogController@updateOrg');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::post('/shop-update/{id}', 'KatalogController@update');

Route::get('set-locale/{locale}', function ($locale) {

    if (in_array($locale, \Config::get('app.locales'))) {   # Проверяем, что у пользователя выбран доступный язык
        Session::put('locale', $locale);                    # И устанавливаем его в сессии под именем locale
    }

    return redirect()->back();                              # Редиректим его <s>взад</s> на ту же страницу

});
