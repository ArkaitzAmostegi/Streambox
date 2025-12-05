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
            // Dos usuarios: 1 = admin, 2 = cliente
            $user = User::find(1); // cambiarlo por 1 para admin, 2 para cliente
            view()->share('currentUser', $user);
        }
    }
}
