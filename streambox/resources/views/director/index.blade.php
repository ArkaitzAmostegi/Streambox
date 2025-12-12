@extends('layouts.app')

@section('content')

<h2>Listado de Directores</h2>

@if ($currentUser && $currentUser->role === 'admin')
    <a href="{{ route('director.create') }}"
        style="display:inline-block; padding:8px 15px; background:#4caf50; color:white; text-decoration:none; border-radius:6px;">
        + Crear nuevo director
    </a>
@endif

<table border="1" cellpadding="10" style="margin-top:20px; width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Año nacimiento</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($directors as $item)
            <tr>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->anio_nacimiento }}</td>
                <td>{{ $item->edad }}</td>

                @if ($currentUser && $currentUser->role === 'admin')
                    <td>
                        {{-- Editar --}}
                        <a href="{{ route('director.edit', $item) }}">Editar</a>

                        {{-- Eliminar --}}
                        <form action="{{ route('director.destroy', $item) }}"
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

<x-back-button :url="route('media.index')" />{{--Botón volver --}}

@endsection


