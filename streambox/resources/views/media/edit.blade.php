@extends('layouts.app')

@section('content')
{{-- {{ dd($media) }} --}}

<h2>Editar contenido: {{ $media->titulo }}</h2>

<form action="{{ route('media.update', $media) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Título:</label><br>
    <input type="text" name="titulo" value="{{ $media->titulo }}" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion">{{ $media->descripcion }}</textarea><br><br>

    <label>Año:</label><br>
    <input type="number" name="anio" value="{{ $media->anio }}" required><br><br>

    <label>Duración (minutos):</label><br>
    <input type="number" name="duracion" value="{{ $media->duracion }}" required><br><br>

    <label>Categoría:</label><br>
    <select name="category_id" required>
        @foreach($categories as $c)
            <option value="{{ $c->id }}" {{ $media->category_id == $c->id ? 'selected' : '' }}>
                {{ $c->nombre }}
            </option>
        @endforeach
    </select><br><br>

    <label>Director:</label><br>
    <select name="director_id" required>
        @foreach($directors as $d)
            <option value="{{ $d->id }}" {{ $media->director_id == $d->id ? 'selected' : '' }}>
                {{ $d->nombre }}
            </option>
        @endforeach

    </select><br><br>

    <button type="submit">Actualizar</button>
</form>

<x-back-button :url="route('category.index')" />

@endsection
