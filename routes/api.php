<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::get('/profile', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
