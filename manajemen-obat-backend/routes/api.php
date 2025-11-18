<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ObatController;

Route::get('/obats', [ObatController::class, 'index']);
Route::post('/obats', [ObatController::class, 'store']);
Route::get('/obats/{id}', [ObatController::class, 'show']);
Route::put('/obats/{id}', [ObatController::class, 'update']);
Route::delete('/obats/{id}', [ObatController::class, 'destroy']);
