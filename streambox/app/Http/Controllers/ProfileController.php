<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    // Mostrar formulario de edición del perfil
    public function edit()
    {
        $currentUser = User::find(1); //tengo que hardcodear el user, ya que Laravel no permite user view()->share() en los controladores
        $profile = $currentUser->profile;

        return view('profile.edit', compact('currentUser', 'profile'));
    }


    // Actualizar perfil en la BBDD
    public function update(Request $request)
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
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
