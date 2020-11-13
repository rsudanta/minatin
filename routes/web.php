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


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PsikologController;

Route::get('/', [HomeController::class, 'index'])->name('user_home');
Route::get('/order', [HomeController::class, 'order'])->name('user_order');
Route::get('/list_order', [PsikologController::class, 'list_order'])->name('list_order');
Route::get('/detail_pemesan', [PsikologController::class, 'detail_pemesan'])->name('detail_pemesan');
Route::get('/input_hasil', [PsikologController::class, 'input_hasil'])->name('input_hasil');
Route::get('/edit_profile', [PsikologController::class, 'edit_profile'])->name('edit_profile');



