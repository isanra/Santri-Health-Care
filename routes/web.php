<?php
namespace App\Http\Middleware\IsAdmin;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::controller(UserController::class)->group (function () {
    Route::get('/aspirasi', 'index');
    Route::post('/aspirasi', 'pesan');
});