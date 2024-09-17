<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\VideogameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:api')->group( function () {
    Route::resource('genre', GenreController::class);
    Route::resource('videogame', VideogameController::class);
    Route::resource('film', FilmController::class);
});


