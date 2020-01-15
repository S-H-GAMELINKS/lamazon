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

Route::get('/', 'WebController@index');

Route::get('/about', 'WebController@about');

Route::get('/contact', 'WebController@contact');

Route::get('carts', 'CartController@index')->name('carts.index');

Route::post('carts', 'CartController@store')->name('carts.store');

Route::delete('carts', 'CartController@destroy')->name('carts.destroy');

Route::resource('products', 'ProductController');

Route::post('products/{product}/fav', 'ProductController@fav')->name('products.fav');

Route::resource('categories', 'CategoryController');

Route::resource('products.reviews', 'ReviewController', [
    'only' => ['store', 'update', 'destroy']
]);

Route::group(['prefix' => 'users'], function () {
    Route::get('mypage', 'UserController@mypage')->name('mypage');
    Route::get('mypage/edit', 'UserController@edit')->name('mypage.edit');
    Route::put('mypage', 'UserController@update')->name('mypage.update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
