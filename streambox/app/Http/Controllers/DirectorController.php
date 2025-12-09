<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('director.index', [
            'directors' => Director::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('director.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'anio_nacimiento' => 'nullable|integer|min:1900|max:' . date('Y'),
            'edad' => 'nullable|integer|min:0|max:120'
        ]);

        Director::create($validated);

        return redirect()->route('director.index')
                        ->with('success', 'Director creado correctamente.');
    }

    //No se usa
    public function show(Director $director): RedirectResponse
    {
        // No se usa vista show de directores
        return redirect()->route('director.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director):View
    {
        return view('director.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Director $director): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'anio_nacimiento' => 'nullable|integer|min:1900|max:' . date('Y'),
            'edad' => 'nullable|integer|min:0|max:120'
        ]);

        $director->update($validated);

        return redirect()->route('director.index')
                        ->with('success', 'Director actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director): RedirectResponse
    {
        if ($director->media()->count() > 0) {
            return back()->with('error', 'No se puede borrar un director que tiene contenido asociado.');
        }

        $director->delete();
        return back()->with('success', 'Director eliminado correctamente.');
    }

}
