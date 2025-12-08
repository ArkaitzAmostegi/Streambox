@extends('layouts.app')

@section('content')
<h2>Editar Director: {{ $director->nombre }}</h2>

<form action="{{ route('director.update', $director) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{ $director->nombre }}" required><br><br>

    <label>Año de nacimiento:</label><br>
    <input type="number" name="anio_nacimiento" value="{{ $director->anio_nacimiento }}"><br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad" value="{{ $director->edad }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<x-back-button :url="route('director.index')" />
@endsection
