@extends('layouts.app')

@section('content')

<h2>Editar Género: {{ $genre->nombre }}</h2>

<form action="{{ route('genre.update', $genre) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre del género:</label>
    <input type="text" name="nombre" value="{{ $genre->nombre }}" required>
    <br><br>

    <button type="submit">Actualizar</button>
</form>

<x-back-button :url="route('genre.index')" />

@endsection
