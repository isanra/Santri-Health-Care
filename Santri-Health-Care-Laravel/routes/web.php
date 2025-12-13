<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('asisten-kesehatan')->group(function () {
    Route::get('/', function () {
        return view('Asisten-Kesehatan.asisten');
    })->name('asisten-kesehatan');
    
    Route::get('/detail', function () {
        return view('Asisten-Kesehatan.detail');
    })->name('asisten-kesehatan.detail');
});

Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
})->name('dashboard');

Route::get('/aspirasi-box', function () {
    return view('Aspirasi-Box.aspirasi');
})->name('aspirasi-box');
// Dashboard khusus untuk aspirasi (dengan prefix berbeda)
Route::get('/aspirasi-dashboard', function () {
    return view('Aspirasi-Box.dashboard-aspirasibox');
})->name('aspirasi-dashboard');

Route::get('/manajemen-obat', function () {
    return view('Manajemen-Obat.obat');
})->name('manajemen-obat');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/forgot-password', function () {
    return 'Fitur lupa password belum tersedia';
})->name('password.request');

Route::get('/register', function () {
    return 'Fitur lupa password belum tersedia';
})->name('register');
