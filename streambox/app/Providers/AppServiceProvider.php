<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;  

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Dos usuarios: 1 = admin, 2 = cliente
        $currentUser = User::find(1); // cambiarlo por 1 para admin, 2 para cliente

        view()->share('currentUser', $currentUser);
    }
}
