<?php

namespace App\Providers;

use App\View\Composers\CurrentUsercomposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\User;  

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (Schema::hasTable('users')) {
            // Ejecuta el composer en TODAS las vistas
            View::composer('*', CurrentUserComposer::class);
        }
    }
}
