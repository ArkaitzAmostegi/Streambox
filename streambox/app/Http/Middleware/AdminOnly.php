<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class AdminOnly
{
    public function handle(Request $request, Closure $next): Response
    {
        // Simulación de usuario logueado (hasta usar Breeze)
        $user = User::find(1);

        if (!$user || $user->role !== 'admin') {
            abort(403, 'Acceso solo para administradores');
        }

        return $next($request);
    }
}
