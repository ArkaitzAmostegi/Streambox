@extends('layouts.app')

@section('content')

<h2>Listado de Géneros</h2>

@if ($currentUser && $currentUser->role === 'admin')
    <a href="{{ route('genre.create') }}"
        style="display:inline-block; padding:8px 15px; background:#4caf50; color:white; text-decoration:none; border-radius:6px;">
        + Crear nuevo género
    </a>
@endif

<table border="1" cellpadding="10" style="margin-top:20px; width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($genres as $item)
            <tr>
                <td>{{ $item->nombre }}</td>

                @if ($currentUser && $currentUser->role === 'admin')
                    <td>
                        {{-- Editar --}}
                        <a href="{{ route('genre.edit', $item) }}">Editar</a>

                        {{-- Eliminar --}}
                        <form action="{{ route('genre.destroy', $item) }}"
                            method="POST"
                            style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('¿Eliminar este contenido?')">
                                Borrar
                            </button>
                        </form>
                    </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay contenido en esta categoría.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<x-back-button :url="route('category.index')" />{{--Botón volver --}}

@endsection


