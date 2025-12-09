<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index(): RedirectResponse
    {
        // No se listan perfiles
        return redirect()->route('profile.edit');
    }

    public function create(): RedirectResponse
    {
        // No se crean perfiles desde interfaz
        return redirect()->route('profile.edit');
    }

    public function store(Request $request): RedirectResponse
    {
        // No se almacenan perfiles
        return redirect()->route('profile.edit');
    }

    public function show(Profile $profile): RedirectResponse
    {
        // No se muestra perfil ajeno
        return redirect()->route('profile.edit');
    }

    // Mostrar formulario de edición del perfil
    public function edit(): View
    {
        $currentUser = User::find(1); //tengo que hardcodear el user, ya que Laravel no permite user view()->share() en los controladores
        $profile = $currentUser->profile;

        return view('profile.edit', compact('currentUser', 'profile'));
    }


    // Actualizar perfil en la BBDD
    public function update(Request $request): RedirectResponse
    {
        $currentUser = User::find(1); //tengo que hardcodear el user, ya que Laravel no permite user view()->share() en los controladores
        $profile = $currentUser->profile;

        $validated = $request->validate([
            'nombre' => 'required|string',
            'edad' => 'nullable|integer',
            'telefono' => 'nullable|string',
            'email' => 'required|email'
        ]);

        // Actualizar USER
        $currentUser->update([
            'name' => $validated['nombre'],
            'email' => $validated['email']
        ]);

        // Actualizar PROFILE
        $profile->update([
            'nombre' => $validated['nombre'],
            'edad' => $validated['edad'],
            'telefono' => $validated['telefono'],
            'email' => $validated['email']
        ]);

        return redirect()->route('profile.edit')->with('success', 'Perfil actualizado correctamente');
    }
    
    //No se usa
    public function destroy(Profile $profile): RedirectResponse
    {
        // No se permite borrar perfiles
        return redirect()->route('profile.edit');
    }
}
