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
Route::get('/', 'PageController@index');

Route::get('pages/contactus', 'PageController@contactus');

Route::get('/profiles', 'PageController@profile');

Route::get('pages/signup', 'SignUpController@signup');

Route::get('pages/signin', 'SignUpController@signin');

Route::get('/item', 'PageController@item');

Route::resource('products','ProductController');

Route::get('/admin/item', 'PageController@adminItem');

Route::get('/admin/items', 'PageController@adminItems');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
