<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*
|--------------------------------------------------------------------------
| MEDIA
|--------------------------------------------------------------------------
*/
// CRUD media
Route::get('/media/tipo/{tipo}', [MediaController::class, 'filterByType'])->name('media.tipo');

Route::resource('media', MediaController::class)
    ->parameters(['media' => 'media'])
    //Ruta porque no acepta media/{media}, coje media/{medium}.  
                            //Como muestra esta línea de consulta en el cmd: 
                                // PS C:\PERSONAL\02 Estudios\02 Grado Superior de DAW\2 Año\DWES\2ª Evaluación\Streambox> docker-compose exec web php artisan route:list | findstr media.update
                                //PUT|PATCH       media/{medium} ....... media.update ??? MediaController@update
                            //Al poner esta ruta, pasamos a esto:
                                //PS C:\PERSONAL\02 Estudios\02 Grado Superior de DAW\2 Año\DWES\2ª Evaluación\Streambox> docker-compose exec web php artisan route:list | findstr media.update
                                // PUT|PATCH       media/{media} ........ media.update ??? MediaController@update
    ->except(['show']) // si no usas show, opcional
    ->middleware([
        'create' => 'admin',
        'store' => 'admin',
        'edit' => 'admin',
        'update' => 'admin',
        'destroy' => 'admin',
    ]);


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
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');