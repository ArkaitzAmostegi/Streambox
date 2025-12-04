<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort(404); //Ya que siempre estará filtrado. Se usará filterByType()
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
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        //
    }

    //Para filtrar por categoría
    public function filterByType($tipo)
    {
         // Mapa tipo → category_id
        $map = [
            'documental' => 1,
            'pelicula'   => 2,
            'serie'      => 3,
        ];

        // Si no existe el tipo, 404
        if (!isset($map[$tipo])) {
            abort(404, "Categoría no válida");
        }

        $categoryId = $map[$tipo];

        // Filtrado real
        $media = Media::where('category_id', $categoryId)->get();

        return view('media.index', compact('media', 'tipo'));
    }

}
