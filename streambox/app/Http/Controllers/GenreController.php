<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('genre.index', [
            'genres' => Genre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        Genre::create($validated);

        return redirect()->route('genre.index')
            ->with('success', 'Género creado correctamente.');
    }

    //No se usa
    public function show(Genre $genre): RedirectResponse
    {
        // No se implementa vista show por no ser necesaria
        return redirect()->route('genre.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre): View
    {
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        $genre->update($validated);

        return redirect()->route('genre.index')
            ->with('success', 'Género actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre): RedirectResponse
    {
        if ($genre->media()->count() > 0) {
            return back()->with('error', 'No se puede borrar un género que está siendo utilizado.');
        }

        $genre->delete();
        return back()->with('success', 'Género eliminado correctamente.');
    }

}
