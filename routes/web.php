<?php

use Illuminate\Support\Facades\Route;

// Route untuk indeks langsung
Route::resource('\posts', \App\Http\Controllers\PostController::class);


