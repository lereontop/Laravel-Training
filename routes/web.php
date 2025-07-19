<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);


Route::middleware('auth')->group(function () {

    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs', [JobController::class, 'store']);

    Route::post('/logout', [LoginController::class, 'destroy']);
});

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'store']);
});
