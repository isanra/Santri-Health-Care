<?php

use Illuminate\Support\Facades\Route;

// Debug: include API routes directly in web group to force registration
require base_path('routes/api.php');

Route::get('/', function () {
    return response()->json(['message' => 'Web root (debug)']);
});
Route::get('/manajemen-obat', function() {
    return view('Manajemen-Obat.obat'); // pastikan view path ini sesuai resources/views
});
