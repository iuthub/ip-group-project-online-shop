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

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/contactus', function () {
    return view('pages.contactus');
});

Route::get('/profile/{userID}', function ($userID) {
    return view('pages.profile');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/signin', function () {
    return view('pages.signin');
});

Route::get('/admin/item', function () {
    return view('pages.admin.item');
});

Route::get('/admin/items', function () {
    return view('pages.admin.items');
});
