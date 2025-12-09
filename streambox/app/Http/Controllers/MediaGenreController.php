<?php

namespace App\Http\Controllers;

use App\Models\MediaGenre;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MediaGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): RedirectResponse
    {
        // No se listan asociaciones pivot en interfaz
        return redirect()->route('category.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): RedirectResponse
    {
        // No se crean vínculos manualmente
        return redirect()->route('category.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // No se almacenan desde interfaz
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MediaGenre $mediaGenre): RedirectResponse
    {
        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MediaGenre $mediaGenre): RedirectResponse
    {
        return redirect()->route('category.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MediaGenre $mediaGenre): RedirectResponse
    {
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MediaGenre $mediaGenre): RedirectResponse
    {
        return redirect()->route('category.index');
    }
}
