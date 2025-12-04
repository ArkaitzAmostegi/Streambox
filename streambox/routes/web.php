<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

//Ruta que lleva al index de category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

