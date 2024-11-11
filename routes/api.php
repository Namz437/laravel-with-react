<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

Route::apiResource('/mcpe', App\Http\Controllers\Api\McpeController::class);