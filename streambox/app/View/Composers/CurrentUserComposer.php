<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\User;

class CurrentUserComposer
{
    public function compose(View $view): void
    {
        //Esto sólo sirve para que en las vistas esté la varible $user
            //Mostrar botones sólo para el admin
            //mostrar menús según rol
            // Dos usuarios: 1 = admin, 2 = cliente
        // Simulación de usuario logueado
        $currentUser = User::find(1); // 1 = admin, 2 = client
        $view->with('currentUser', $currentUser);
    }
}
