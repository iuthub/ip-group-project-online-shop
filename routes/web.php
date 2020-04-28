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

Route::get('/contactus', 'PageController@contactus');

Route::get('/profile/', 'PageController@profile');

Route::get('/signup', 'PageController@signup');

Route::get('/signin', 'PageController@signin');

Route::get('/item', 'PageController@item');

Route::get('/admin/item', 'PageController@adminItem');

Route::get('/admin/items', 'PageController@adminItems');

Route::resource('orders', 'OrdersController');