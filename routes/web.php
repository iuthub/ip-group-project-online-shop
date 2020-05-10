<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('/','PageController');
Route::resource('/pages','PageController');
Route::get('/pages/{product}','PageController@show')->name('shop.show');

Route::resource('products','ProductController');

Route::get('/contact', 'ContactUSController@create')->name('contact.create');
Route::post('/contact', 'ContactUSController@store')->name('contact.store');;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'HomeController@adminHome')->name('products')->middleware('is_admin');

Route::get('/cart', 'CartController@index')->name('cart.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route:: middleware('auth')->group(function () {

Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
Route::patch('/my-profile', 'UsersController@update')->name('users.update');  

});
