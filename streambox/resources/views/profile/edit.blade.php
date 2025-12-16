@extends('layouts.app')

@section('content')
<h2>Editar Perfil</h2>

<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $profile->nombre }}" required><br><br>

    <label>Edad:</label>
    <input type="number" name="edad" value="{{ $profile->edad }}" ><br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="{{ $profile->telefono }}" ><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $profile->email }}" required><br><br>

    <button type="submit" class="btn">Guardar cambios</button>
</form>
{{-- Botón volver --}}
<x-back-button :url="route('profile.index')" />
@endsection
