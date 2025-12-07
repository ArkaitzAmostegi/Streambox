<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Category;
use App\Models\Director;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //Validamos permisos de seguridad, si no es admin, no puede editar, borrar,.... todo cuanto use denyIfNotAdmin
    private function denyIfNotAdmin()
    {
        $user = \App\Models\User::find(1); // o auth()->user() más adelante

        if (!$user || $user->role !== 'admin') {
            abort(403, 'No autorizado');
        }
    }

    public function index()
    {
        abort(404); // Nunca usado
    }

    public function create()
    {
        $this->denyIfNotAdmin();

        return view('media.create', [
            'categories' => Category::all(),
            'directors' => Director::all()
        ]);
    }

    //Método show vacío
    public function show(Media $media)
    {
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $this->denyIfNotAdmin();

        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'nullable|string',
            'anio' => 'required|integer',
            'duracion' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'director_id' => 'required|exists:directors,id',
        ]);

        Media::create($validated);

        return redirect()->route('category.media', $validated['category_id'])
            ->with('success', 'Contenido creado correctamente');
    }

    public function edit(Media $media)
    {
        $this->denyIfNotAdmin();

        return view('media.edit', [
            'media' => $media,
            'categories' => Category::all(),
            'directors' => Director::all()
        ]);
    }

    public function update(Request $request, Media $media)
    {
        $this->denyIfNotAdmin();

        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'nullable|string',
            'anio' => 'required|integer',
            'duracion' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'director_id' => 'required|exists:directors,id',
        ]);

        $media->update($validated);

        return redirect()->route('category.media', $validated['category_id'])
            ->with('success', 'Contenido actualizado');
    }

    public function destroy(Media $media)
    {
        $this->denyIfNotAdmin();

        $categoryId = $media->category_id;

        $media->delete();

        return redirect()->route('category.media', $categoryId)
            ->with('success', 'Contenido eliminado');
    }

    public function filterByType($tipo)
    {
        // Mapa tipo → category_id
        $map = [
            'documental' => 1,
            'pelicula'   => 2,
            'serie'      => 3,
        ];

        if (!isset($map[$tipo])) {
            abort(404, "Categoría no válida");
        }

        $categoryId = $map[$tipo];

        $media = Media::where('category_id', $categoryId)->get();
        $category = Category::findOrFail($categoryId);

        return view('media.index', compact('media', 'category'));
    }
}
