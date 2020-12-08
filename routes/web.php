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
        Route::post('/checkout/upload/{id}', 'App\Http\Controllers\OrderController@bukti')
            ->name('upload.bukti');
        Route::get('/checkout/{id}', 'App\Http\Controllers\OrderController@show')
            ->name('bukti');
        Route::get('/kerjakan/{id}', 'App\Http\Controllers\KerjakanController@index')
            ->name('user.kerjakan');
        Route::post('/kerjakan/store', 'App\Http\Controllers\KerjakanController@store')
            ->name('user.kerjakan.store');
        Route::get('/order/hasil/{id}', 'App\Http\Controllers\HasilPsikotestController@hasil_user')
            ->name('user.hasil');
        Route::get('/order/hasil/download/{id}', 'App\Http\Controllers\HasilPsikotestController@download')
            ->name('user.hasil.download');
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
        Route::get('/lihat-soal/{id}', 'App\Http\Controllers\SoalController@show')
            ->name('psikolog.psikotest.soal.show');
        Route::get('/lihat-soal/soal/{id}', 'App\Http\Controllers\SoalController@edit_soal')
            ->name('psikolog.psikotest.soal.edit');
        Route::get('/lihat-soal/opsi/{id}', 'App\Http\Controllers\SoalController@edit_opsi')
            ->name('psikolog.psikotest.opsi.edit');
        Route::post('/lihat-soal/soal/update/{id}', 'App\Http\Controllers\SoalController@update_soal')
            ->name('psikolog.psikotest.soal.update');
        Route::post('/lihat-soal/opsi/update/{id}', 'App\Http\Controllers\SoalController@update_opsi')
            ->name('psikolog.psikotest.opsi.update');
        Route::get('/lihat-soal/soal/destroy/{id}', 'App\Http\Controllers\SoalController@destroy_soal')
            ->name('psikolog.psikotest.soal.destroy');
        Route::get('/buat-soal', 'App\Http\Controllers\SoalController@index')
            ->name('psikolog.psikotest.soal');
        Route::post('/buat-opsi/store', 'App\Http\Controllers\SoalController@store')
            ->name('psikolog.psikotest.soal.store');
        Route::get('/order/{id}', 'App\Http\Controllers\OrderPsikologController@index')
            ->name('psikolog.order');
        Route::get('/order/hasil/{id}', 'App\Http\Controllers\HasilPsikotestController@index')
            ->name('psikolog.hasil');
        Route::get('/order/hasil/input-hasil/{id}', 'App\Http\Controllers\HasilPsikotestController@show')
            ->name('psikolog.input_hasil');
        Route::post('/order/hasil/input-hasil/store', 'App\Http\Controllers\HasilPsikotestController@store')
            ->name('psikolog.input_hasil.store');
        Route::get('/order/hasil/hasil/get/{id}', 'App\Http\Controllers\HasilPsikotestController@get_pdf')
            ->name('psikolog.hasil.get');
    });
Auth::routes(['verify' => true]);

Route::prefix('admin')
    ->middleware(['auth', 'admin', 'active'])
    ->group(function () {
        Route::get('/user', 'App\Http\Controllers\AdminUserController@index')
            ->name('admin.user');
        Route::get('/order', 'App\Http\Controllers\AdminOrderController@index')
            ->name('admin.order');
        Route::get('/order/show/{id}', 'App\Http\Controllers\AdminOrderController@show')
            ->name('admin.order.show');
        Route::post('/order/update/{id}', 'App\Http\Controllers\AdminOrderController@update')
            ->name('admin.order.update');
        Route::get('/user/show/{id}', 'App\Http\Controllers\AdminUserController@show')
            ->name('admin.user.show');
        Route::post('/user/update/{id}', 'App\Http\Controllers\AdminUserController@update')
            ->name('admin.user.update');
        Route::get('/user/download/{id}', 'App\Http\Controllers\OrderController@download')
            ->name('admin.download');
    });
Auth::routes(['verify' => true]);
Blade::directive('money', function ($expression) {
    return "Rp <?php echo number_format($expression,0,',','.'); ?>";
});
