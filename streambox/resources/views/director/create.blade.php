@extends('layouts.app')

@section('content')
<h2>Crear Director</h2>

<form action="{{ route('director.store') }}" method="POST">
    @csrf

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{ old('nombre') }}" required><br><br>

    <label>Año de nacimiento:</label><br>
    <input type="number" name="anio_nacimiento" value="{{ old('anio_nacimiento') }}"><br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad" value="{{ old('edad') }}"><br><br>

    <button type="submit">Guardar</button>
</form>

<x-back-button :url="route('director.index')" />
@endsection
