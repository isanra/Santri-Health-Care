<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\IsAdmin;
use App\Constants\RouteConstants;
use Illuminate\Support\Facades\Route;

Route::get('/aspirasi', function () {
    return redirect(RouteConstants::URL_USER_ASPIRASI);
})->middleware(IsAdmin::class);

Route::controller(AspirasiController::class)->group(function () {
    Route::prefix(config('routes.prefixes.user'))->group(function () {
        Route::get('/aspirasi', 'index')->name('user.aspirasi.index');
        Route::post('/aspirasi', 'pesanCreate')->name('user.aspirasi.create');
        Route::get('/aspirasi/pesan', 'pesanAll')->name('user.aspirasi.all');
        Route::get('/aspirasi/pesan/{pesanId}', 'pesanIndex')->name('user.aspirasi.detail');
    });
})->middleware(IsAdmin::class);

Route::controller(DashboardController::class)->group(function () {
    Route::prefix(config('routes.prefixes.dashboard'))->group(function () {
        Route::get('/aspirasi', 'index')->name('dashboard.aspirasi.index');
    });
});