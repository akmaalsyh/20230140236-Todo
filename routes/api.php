<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/product', [ProductController::class, 'store']);
});

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::post('/login', [AuthController::class, 'getToken']);