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

Route::prefix('user')
    ->middleware(['auth', 'user', 'active'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')
            ->name('user_home');
        Route::get('/dashboard/order/{id}', 'App\Http\Controllers\OrderController@index')
            ->name('user_order');
        Route::get('/dashboard/profile', 'App\Http\Controllers\ProfileController@index')
            ->name('user_profile');
        Route::get('/dashboard/{slug}', 'App\Http\Controllers\DetailPsikotestController@index')
            ->name('detail.psikotest');
        Route::post('/dashboard/checkout/{id}', 'App\Http\Controllers\DetailPsikotestController@success')
            ->name('sukses');
        Route::resource('users', App\Http\Controllers\ProfileController::class);
    });

Route::get('/', 'App\Http\Controllers\LandingPageController@index')->name('home');


Route::prefix('psikolog')
    ->middleware(['auth', 'psikolog', 'active', 'psikotest'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\ProfilePsikologController@index')
            ->name('psikolog.dashboard');
        Route::get('/edit', 'App\Http\Controllers\ProfilePsikologController@show')
            ->name('psikolog.profile.show');
        Route::post('/edit/{id}', 'App\Http\Controllers\ProfilePsikologController@update')
            ->name('psikolog.profile.update');
        Route::get('/psikotest/{id}', 'App\Http\Controllers\PsikotestController@index')
            ->name('psikolog.psikotest');
        Route::get('/psikotest/{id}/buat-psikotest', 'App\Http\Controllers\PsikotestController@create')
            ->name('psikolog.psikotest.show');
        Route::post('psikotest/buat-psikotest/create', 'App\Http\Controllers\PsikotestController@store')
            ->name('psikolog.psikotest.create');
    });
Auth::routes(['verify' => true]);

Route::prefix('admin')
    ->middleware(['auth', 'admin', 'active'])
    ->group(function () {
        Route::get('/admin_user', 'App\Http\Controllers\AdminUserController@index')
            ->name('psikolog.dashboard');
        Route::get('/admin_order', 'App\Http\Controllers\AdminOrderController@index')
            ->name('psikolog.profile.show');
    });
Auth::routes(['verify' => true]);

Blade::directive('money', function ($expression) {
    return "Rp <?php echo number_format($expression,0,',','.'); ?>";
});
