@extends('layouts.app')

@section('content')
{{-- {{ dd($media) }} --}}

<h2>Editar contenido: {{ $media->titulo }}</h2>

<form action="{{ route('media.update', $media->id) }}" method="POST">
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

    <label>Género</label><br>
    <select name="genre_ids[]" multiple>
        @foreach($genres as $genre)
            <option value="{{ $genre->id }}"
                {{ $media->genres->contains($genre->id) ? 'selected' : '' }}>
                {{ $genre->nombre }}
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

    <button type="submit" class="btn">Actualizar</button>
</form>

<x-back-button :url="route('media.index')"/>

@endsection
