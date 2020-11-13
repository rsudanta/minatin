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
Route::group(['middleware' => 'active'], function () {
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('user_home');
Route::get('/order', 'App\Http\Controllers\OrderController@index')->name('user_order');
});