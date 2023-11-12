<?php
use Illuminate\Support\Facades\Route;


Route::post('/api/login', [App\Http\Controllers\AuthController::class, 'login']);

//Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('api')->group(function () {
        Route::get('/user', [App\Http\Controllers\UserController::class, 'getUser']);
        Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index']);
        Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store']);
    });
//});
