<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

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

Auth::routes();

Route::get('/','HomeController@main')->name('mainHome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

Route::resource('/pages','PageController');
Route::get('/pages/{product}','PageController@show')->name('shop.show');

Route::get('/contact', 'ContactUSController@create')->name('contact.create');
Route::post('/contact', 'ContactUSController@store')->name('contact.store');;

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/confirm', 'CartController@confirm')->name('cart.confirm')->middleware('auth');
Route::get('/cart/delete/{id}', 'CartController@delete')->name('cart.delete')->middleware('auth');

Route::get('/search', 'PageController@search')->name('search');

Route:: middleware('auth')->group(function () {

    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');

});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'is_admin', 'as' => 'admin.'], function(Router $router){

    $router->get('/home', 'MainController@index')->name('home');

    $router->resource('products','ProductController', [
        "names" => [
            'index' => 'products.index',
            'store' => 'products.store'
        ]
    ]);
    $router->resource('orders','OrdersController');
    $router->get('orders/confirm/{id}','OrdersController@confirm')->name('orders.confirm');
});