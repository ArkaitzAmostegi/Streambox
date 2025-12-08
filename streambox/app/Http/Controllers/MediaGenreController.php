<?php

namespace App\Http\Controllers;

use App\Models\MediaGenre;
use Illuminate\Http\Request;

class MediaGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // No se listan asociaciones pivot en interfaz
        return redirect()->route('category.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // No se crean vínculos manualmente
        return redirect()->route('category.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // No se almacenan desde interfaz
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MediaGenre $mediaGenre)
    {
        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MediaGenre $mediaGenre)
    {
        return redirect()->route('category.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MediaGenre $mediaGenre)
    {
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MediaGenre $mediaGenre)
    {
        return redirect()->route('category.index');
    }
}
