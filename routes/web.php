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
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EditProfileController;

Route::group(['middleware' => 'active'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('user_home');
    Route::get('/order', [OrderController::class, 'index'])->name('user_order');
    Route::get('/user_edit-profile', [EditProfileController::class, 'editprofile'])->name('user_edit-profile');
});

Route::prefix('psikolog')
-> middleware(['active'])
-> group( function() {
    Route::get('/list_order/{id}', [PsikologController::class, 'list_order'])->name('list_order');
    Route::get('/profile_psikolog/{id}', [PsikologController::class, 'profile_psikolog'])->name('profile_psikolog');
    Route::get('/edit_profile/{id}', [PsikologController::class, 'edit_profile'])->name('edit_profile');
    Route::post('/update_profile/{id}', [PsikologController::class, 'update_profile'])->name('update_profile');
    Route::get('/detail_pemesan', [PsikologController::class, 'detail_pemesan'])->name('detail_pemesan');
    Route::get('/input_hasil', [PsikologController::class, 'input_hasil'])->name('input_hasil');
    Route::get('/psikotest/{id}', [PsikologController::class, 'psikotest'])->name('psikotest');
    Route::get('/buat_psikotest/{id}', [PsikologController::class, 'buat_psikotest'])->name('buat_psikotest');
});




