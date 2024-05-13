<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PenggalanganDanaController;
use App\Http\Controllers\SumbanganController;
use App\Http\Middleware\VerifyAdminAccess;
use App\Http\Middleware\VerifyUserAccess;

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
    return view('index');
})->name('index');

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Group routes that require authentication
Route::middleware(['auth'])->group(function () {
    // User routes
    Route::get('/user/homepage', [UserController::class, 'homepage'])
        ->name('user.homepage')
        ->middleware(VerifyUserAccess::class);

    Route::get('/user/informasi-donasi', [UserController::class, 'informasiDonasi'])
        ->name('user.informasiDonasi')
        ->middleware(VerifyUserAccess::class);

    Route::get('/user/Profile-akun', [UserController::class, 'profileAkun'])
        ->name('user.profileAkun')
        ->middleware(VerifyUserAccess::class);

    Route::get('/user/Ganti-password', [UserController::class, 'showChangePasswordForm'])
        ->name('user.password')
        ->middleware(VerifyUserAccess::class);

    Route::post('/user/update-password', [UserController::class, 'changePassword'])
        ->name('user.updatePassword')
        ->middleware(VerifyUserAccess::class);

    Route::get('/user/list-donasi', [SumbanganController::class, 'listDonasi'])
        ->name('user.listDonasi')
        ->middleware(VerifyUserAccess::class);

    Route::get('/user/donasi/{id}', [SumbanganController::class, 'donasi'])
        ->name('user.donasi')
        ->middleware(VerifyUserAccess::class);

    Route::post('/sumbangan/store', [SumbanganController::class, 'store'])
        ->name('sumbangan.store')
        ->middleware(VerifyUserAccess::class);

    Route::get('/user/inbox', [UserController::class, 'inbox'])
        ->name('user.inbox')
        ->middleware(VerifyUserAccess::class);

    Route::get('/user/feedback/{id}', [UserController::class, 'showFeedback'])
        ->name('user.showFeedback')
        ->middleware(VerifyUserAccess::class);

    Route::delete('/user/feedback/{id}', [UserController::class, 'deleteFeedback'])
        ->name('user.deleteFeedback')
        ->middleware(VerifyUserAccess::class);    

    // Admin routes
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard')
        ->middleware(VerifyAdminAccess::class);

    Route::get('/admin/data-user', [AdminController::class, 'dataUser'])
        ->name('admin.dataUser')
        ->middleware(VerifyAdminAccess::class);

    Route::get('/admin/profile', [AdminController::class, 'informasiAdmin'])
        ->name('admin.informasi_admin')
        ->middleware(VerifyAdminAccess::class);

    Route::get('/admin/penggalangan', [PenggalanganDanaController::class, 'penggalangan'])
        ->name('admin.penggalangan')
        ->middleware(VerifyAdminAccess::class);

    Route::get('/admin/buat-penggalangan', [PenggalanganDanaController::class, 'createPenggalangan'])
        ->name('admin.createPenggalangan')
        ->middleware(VerifyAdminAccess::class);

    Route::post('/admin/store-Penggalangan', [PenggalanganDanaController::class, 'storePenggalangan'])
        ->name('admin.storePenggalangan')
        ->middleware(VerifyAdminAccess::class);

    Route::get('/admin/search-penggalangan', [PenggalanganDanaController::class, 'searchPenggalangan'])
        ->name('admin.searchPenggalangan')
        ->middleware(VerifyAdminAccess::class);

    Route::delete('/admin/penggalangan/{id}', [PenggalanganDanaController::class, 'destroy'])
        ->name('admin.penggalangan.destroy')
        ->middleware(VerifyAdminAccess::class);    

    Route::get('admin/transaksi-donasi', [AdminController::class, 'transaksi'])
        ->name('admin.transaksi')
        ->middleware(VerifyAdminAccess::class);

    Route::get('/admin/transaksi/{id}', [AdminController::class, 'showTransaction'])
        ->name('admin.showTransaction')
        ->middleware(VerifyAdminAccess::class);

    Route::get('/admin/cetak-laporan/semua', [AdminController::class, 'cetakLaporanSemua'])
        ->name('admin.cetakLaporanSemua')
        ->middleware(VerifyAdminAccess::class);

    Route::get('/admin/cetak-laporan/{id}', [AdminController::class, 'cetakLaporanSatu'])
        ->name('admin.cetakLaporanSatu')
        ->middleware(VerifyAdminAccess::class);
});
