<?php
use Illuminate\Support\Facades\Route;


Route::post('/api/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth.jwt')->group(function () {
    Route::prefix('api')->group(function () {
        Route::get('/user', [App\Http\Controllers\UserController::class, 'getUser']);
        //Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index']);
        Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'create']);
        Route::put('/contacts/{id}', [App\Http\Controllers\ContactController::class, 'update']);
    });
});
