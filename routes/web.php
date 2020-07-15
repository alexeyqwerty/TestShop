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

Route::get('/', 'WelcomeController@Welcome')->name('welcome');

Route::post('/', 'WelcomeController@Quit')->name('quit');

Route::get('user-auth', 'AuthController@Authorizing')->name('user-auth');

Route::get('user-reg', 'RegController@Registering')->name('user-reg');

Route::post('user-auth', 'AuthController@CheckAuthorizing')->name('user-auth');

Route::post('user-reg', 'RegController@CheckRegistering')->name('user-reg');

Route::get('shop', 'ShopController@MainShop')->name('main-shop');

Route::get('shop/search', 'ShopController@SearchShop')->name('search-shop');
