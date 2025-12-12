@extends('layouts.app')

@section('content')

{{-- Filtro de selección --}}
<form method="GET" action="{{ route('media.index') }}" style="margin-bottom:20px;">
    {{-- Tipo --}}
    <select name="tipo">
        <option value="">-- Tipo --</option>
        <option value="pelicula" {{ request('tipo') === 'pelicula' ? 'selected' : '' }}>Películas</option>
        <option value="serie" {{ request('tipo') === 'serie' ? 'selected' : '' }}>Series</option>
        <option value="documental" {{ request('tipo') === 'documental' ? 'selected' : '' }}>Documentales</option>
    </select>

    {{-- Género --}}
    <select name="genre_id">
        <option value="">-- Género --</option>
        @foreach ($genres as $genre)
            <option value="{{ $genre->id }}"
                {{ request('genre_id') == $genre->id ? 'selected' : '' }}>
                {{ $genre->nombre }}
            </option>
        @endforeach
    </select>

    {{-- Director --}}
    <select name="director_id">
        <option value="">-- Director --</option>
        @foreach ($directors as $director)
            <option value="{{ $director->id }}"
                {{ request('director_id') == $director->id ? 'selected' : '' }}>
                {{ $director->nombre }}
            </option>
        @endforeach
    </select>

    <button type="submit">Filtrar</button>
</form>

<h2>Contenido de {{ $tipo }}</h2>

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
            <th>Género</th>
            <th>Duración</th>
            <th>Director</th>
            <th>Año</th>
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
                <td>{{ $item->genre->nombre ?? 'Sin calificar' }}</td>
                <td>{{ $item->duracion }}</td>
                <td>{{ $item->director->nombre ?? 'Sin director' }}</td>
                <td>{{ $item->anio }}</td>

                @if ($currentUser && $currentUser->role === 'admin')
                    <td>
                        {{-- Editar --}}
                        <a href="{{ route('media.edit', $item) }}">Editar</a>

                        {{-- Eliminar --}}
                        <form action="{{ route('media.destroy', $item) }}"
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


