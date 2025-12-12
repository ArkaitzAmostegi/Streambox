@extends('layouts.app')

@section('content')
<h2>Crear nuevo contenido</h2>

<form action="{{ route('media.store') }}" method="POST">
    @csrf

    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"></textarea><br><br>

    <label>Año:</label><br>
    <input type="number" name="anio" required><br><br>

    <label>Duración (minutos):</label><br>
    <input type="number" name="duracion" required><br><br>

    <label>Categoría:</label><br>
    <select name="tipo" required>
        <option value="pelicula">Película</option>
        <option value="serie">Serie</option>
        <option value="documental">Documental</option>
    </select><br><br>

    <label>Director:</label><br>
    <select name="director_id" required>
        @foreach($directors as $d)
            <option value="{{ $d->id }}">{{ $d->nombre }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Crear</button>
</form>
<x-back-button url="{{ route('media.index') }}" /> {{--Botón volver --}}
@endsection
