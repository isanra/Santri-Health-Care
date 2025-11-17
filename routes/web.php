<?php
namespace App\Http\Middleware\IsAdmin;

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/aspirasi', function () {
    return redirect('/user/aspirasi');
})->middleware(IsAdmin::class);

Route::controller(AspirasiController::class)->group(function () {
    Route::prefix('user')->group (function () {
        Route::get('/aspirasi', 'index');
        Route::post('/aspirasi', 'pesan');
        Route::get('/aspirasi/pesan', 'pesanIndex');
        Route::get('/aspirasi/pesan/{pesanId}', 'pesanan');
    });
})->middleware(IsAdmin::class);

Route::controller(DashboardController::class)->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/aspirasi', 'index');
    });
});