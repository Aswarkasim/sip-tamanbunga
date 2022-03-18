<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePostController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminSaranController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\HomeProfileController;
use App\Http\Controllers\AdminAbsensiController;
use App\Http\Controllers\AdminPesertaController;
use App\Http\Controllers\AdminImunisasiController;
use App\Http\Controllers\AdminPemeriksaanController;
use App\Http\Controllers\AdminCategoryPostController;
use App\Http\Controllers\AdminConfigurationController;

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
    return view('welcome');
});



Route::prefix('/admin/auth')->middleware('guest')->group(function () {
    Route::get('/', [AdminAuthController::class, 'index'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::get('/register', [AdminAuthController::class, 'register']);
    Route::post('/doRegister', [AdminAuthController::class, 'doRegsiter']);
});


Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/logout', [AdminAuthController::class, 'logout']);

    Route::get('/dashboard', function () {
        $data = [
            'content' => 'admin/dashboard/index'
        ];
        return view('admin/layouts/wrapper', $data);
    });
    Route::get('/absensi', [AdminAbsensiController::class, 'index']);
    Route::get('/absensi/kehadiran', [AdminAbsensiController::class, 'is_kehadiran']);


    Route::resource('/user', AdminUserController::class);

    Route::get('/konfigurasi', [AdminConfigurationController::class, 'index']);
    Route::put('/konfigurasi/update', [AdminConfigurationController::class, 'update']);

    Route::resource('/imunisasi', AdminImunisasiController::class);
    Route::resource('/banner', AdminBannerController::class);

    Route::get('/peserta/history', [AdminPesertaController::class, 'history']);
    Route::get('/kematian', [AdminPesertaController::class, 'kematian']);
    Route::resource('/peserta', AdminPesertaController::class);

    Route::put('/pemeriksaan/update/{id}', [AdminPemeriksaanController::class, 'update']);

    Route::get('/saran', [AdminSaranController::class, 'index']);

    Route::prefix('/posts')->group(function () {
        Route::resource('/post', AdminPostController::class);
        Route::resource('/kategori', AdminCategoryPostController::class);
    });
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/profile/history', [HomeProfileController::class, 'history']);
Route::resource('/profile', HomeProfileController::class);

Route::prefix('/home')->group(function () {
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/post', [HomePostController::class, 'index']);
    Route::get('/post/show/{id}', [HomePostController::class, 'show']);
});
