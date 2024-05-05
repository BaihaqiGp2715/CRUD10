<?php

use Illuminate\Support\Facades\Route;

// Route untuk indeks langsung
Route::get('/posts/index', [\App\Http\Controllers\PostController::class, 'index']);

// Route resource
Route::resource('posts', \App\Http\Controllers\PostController::class);