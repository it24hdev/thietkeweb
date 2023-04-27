<?php

use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;


// ======================== CONFIG ========================= //
Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

// ======================== BACKEND ======================== //

// == Đăng nhập -  Đăng ký == //
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');

// == Thực hiện chức năng sau khi đăng nhập == //
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [AuthController::class, 'dashboard'])->name('dashboard');
});


// ======================== FRONTEND ======================= //
Route::get('/', [HomeController::class, 'index'])->name('home');
