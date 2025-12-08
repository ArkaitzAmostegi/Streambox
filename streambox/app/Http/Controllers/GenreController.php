<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('genre.index', [
            'genres' => Genre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        Genre::create($validated);

        return redirect()->route('genre.index')
            ->with('success', 'Género creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
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
    public function destroy(Genre $genre)
    {
        if ($genre->media()->count() > 0) {
            return back()->with('error', 'No se puede borrar un género que está siendo utilizado.');
        }

        $genre->delete();
        return back()->with('success', 'Género eliminado correctamente.');
    }

}
