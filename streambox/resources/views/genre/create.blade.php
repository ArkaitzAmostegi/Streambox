@extends('layouts.app')

@section('content')

<h2>Crear Género</h2>

<form action="{{ route('genre.store') }}" method="POST">
    @csrf

    <label>Nombre del género:</label>
    <input type="text" name="nombre" required>
    <br><br>

    <button type="submit">Guardar</button>
</form>

<x-back-button :url="route('genre.index')" />

@endsection

