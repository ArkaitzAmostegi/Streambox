<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| MEDIA
|--------------------------------------------------------------------------
*/

// Listado por tipo: pelicula | documental | serie
Route::get('/media/tipo/{tipo}', [MediaController::class, 'filterByType'])
    ->name('media.tipo');

// CRUD media (sin index)
Route::resource('media', MediaController::class)->except(['index']);

/*
|--------------------------------------------------------------------------
| GÉNEROS
|--------------------------------------------------------------------------
*/
Route::resource('genre', GenreController::class);

/*
|--------------------------------------------------------------------------
| DIRECTORES
|--------------------------------------------------------------------------
*/
Route::resource('director', DirectorController::class);

/*
|--------------------------------------------------------------------------
| PERFIL
|--------------------------------------------------------------------------
*/
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
