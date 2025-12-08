<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Listado principal de categorías
    public function index()
    {
        return view('category.index', [
            'categories' => Category::all()
        ]);
    }

    // Muestra los media de una categoría
    public function showMedia(Category $category)
    {
        // Obtener los media asociados
        $media = $category->media()->get();

        return view('media.index', [
            'media' => $media,
            'category' => $category
        ]);
    }

    // Formulario de creación (no usado)
    public function create()
    {
        // Crear categorías no está contemplado por el proyecto
        return redirect()->route('category.index');
    }

    // Guardar categoría (no usado)
    public function store(Request $request)
    {
        // No se crean categorías desde interfaz
        return redirect()->route('category.index');
    }

     // Mostrar detalles (no usado en este proyecto)
    public function show(Category $category)
    {
        return redirect()->route('category.index');
    }

    // Formulario de edición (no usado)
    public function edit(Category $category)
    {
        return redirect()->route('category.index');
    }

    // Actualizar categoría (no usado)
    public function update(Request $request, Category $category)
    {
        return redirect()->route('category.index');
    }

    // Borrar categoría (no usado)
    public function destroy(Category $category)
    {
        return redirect()->route('category.index');
    }
}
