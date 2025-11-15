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

Route::get('/manajemen-obat', function () {
    return view('Manajemen-Obat.obat');
})->name('manajemen-obat');