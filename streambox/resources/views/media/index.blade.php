@extends('layouts.app')

@section('content')

<h2>Contenido de {{ $category->nombre }}</h2>

@if ($currentUser && $currentUser->role === 'admin')
    <a href="{{ route('media.create') }}"
       style="display:inline-block; padding:8px 15px; background:#4caf50; color:white; text-decoration:none; border-radius:6px;">
        + Crear nuevo contenido
    </a>
@endif

<table border="1" cellpadding="10" style="margin-top:20px; width:100%">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Año</th>
            <th>Duración</th>
            <th>Director</th>
            @if ($currentUser && $currentUser->role === 'admin')
                <th>Acciones</th>
            @endif
        </tr>
    </thead>

    <tbody>
        @forelse ($media as $item)
            <tr>
                <td>{{ $item->titulo }}</td>
                <td>{{ $item->descripcion }}</td>
                <td>{{ $item->anio }}</td>
                <td>{{ $item->duracion }}</td>
                <td>{{ $item->director->nombre ?? 'Sin director' }}</td>

                @if ($currentUser && $currentUser->role === 'admin')
                    <td>
                        {{-- Editar --}}
                        <a href="{{ route('media.edit', $item->id) }}">Editar</a>

                        {{-- Eliminar --}}
                        <form action="{{ route('media.destroy', $item->id) }}"
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

@endsection

