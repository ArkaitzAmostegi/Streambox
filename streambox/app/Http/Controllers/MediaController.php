<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MediaController extends Controller
{
    /**
     * Seguridad: solo administradores pueden modificar contenido
     */
    private function denyIfNotAdmin(): void
    {
        $user = \App\Models\User::find(1); // simula login

        if (!$user || $user->role !== 'admin') {
            abort(403, 'No autorizado');
        }
    }

    /**
     * No existe listado global de media
     */
    public function index(): RedirectResponse
    {
        return redirect()->route('media.tipo', 'pelicula');
    }

    /**
     * Listado por tipo (pelicula, documental, serie)
     */
    public function filterByType(string $tipo): View
    {
        abort_unless(
            in_array($tipo, ['pelicula', 'documental', 'serie']),
            404,
            'Tipo no válido'
        );

        $media = Media::where('tipo', $tipo)->get();

        return view('media.index', [
            'media' => $media,
            'tipo'  => ucfirst($tipo)
        ]);
    }

    /**
     * Formulario de creación
     */
    public function create(): View
    {
        $this->denyIfNotAdmin();

        return view('media.create', [
            'directors' => Director::all(),
            'tipos' => ['pelicula', 'documental', 'serie']
        ]);
    }

    /**
     * Guardar nuevo contenido
     */
    public function store(Request $request): RedirectResponse
    {
        $this->denyIfNotAdmin();

        $validated = $request->validate([
            'titulo'       => 'required|string',
            'descripcion'  => 'nullable|string',
            'anio'         => 'required|integer',
            'duracion'     => 'required|integer',
            'tipo'         => 'required|in:pelicula,documental,serie',
            'director_id'  => 'required|exists:directors,id',
        ]);

        Media::create($validated);

        return redirect()
            ->route('media.tipo', $validated['tipo'])
            ->with('success', 'Contenido creado correctamente');
    }

    /**
     * Mostrar media (no se usa)
     */
    public function show(Media $media): RedirectResponse
    {
        return redirect()->back();
    }

    /**
     * Formulario de edición
     */
    public function edit(Media $media): View
    {
        $this->denyIfNotAdmin();

        return view('media.edit', [
            'media'     => $media,
            'directors' => Director::all(),
            'tipos'     => ['pelicula', 'documental', 'serie']
        ]);
    }

    /**
     * Actualizar media
     */
    public function update(Request $request, Media $media): RedirectResponse
    {
        $this->denyIfNotAdmin();

        $validated = $request->validate([
            'titulo'       => 'required|string',
            'descripcion'  => 'nullable|string',
            'anio'         => 'required|integer',
            'duracion'     => 'required|integer',
            'tipo'         => 'required|in:pelicula,documental,serie',
            'director_id'  => 'required|exists:directors,id',
        ]);

        $media->update($validated);

        return redirect()
            ->route('media.tipo', $validated['tipo'])
            ->with('success', 'Contenido actualizado');
    }

    /**
     * Eliminar media
     */
    public function destroy(Media $media): RedirectResponse
    {
        $this->denyIfNotAdmin();

        $tipo = $media->tipo;

        $media->delete();

        return redirect()
            ->route('media.tipo', $tipo)
            ->with('success', 'Contenido eliminado');
    }
}
