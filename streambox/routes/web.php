<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DirectorController;

Route::get('/', function () {
    return view('welcome');
});

// Categorías (listado)
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('category.index');

    // Media según categoría
Route::get('/categories/{category}/media', [CategoryController::class, 'showMedia'])
    ->name('category.media');

// CRUD Media
Route::resource('media', MediaController::class)
    ->parameters(['media' => 'media']) // Si no hacia esto pedía medium el singular de media para el edit o el delete
    ->except(['index']);

// CRUD Genres
Route::resource('genre', GenreController::class);

// CRUD Directors
Route::resource('director', DirectorController::class);
