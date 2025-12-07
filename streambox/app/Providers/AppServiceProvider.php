<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
            //Esto sólo sirve para que en las vistas esté la varible $user
            //Mostrar botones sólo para el admin
            //mostrar menús según rol
            // Dos usuarios: 1 = admin, 2 = cliente
            $user = User::find(2); // cambiarlo por 1 para admin, 2 para cliente
            view()->share('currentUser', $user);
        }
    }
}
