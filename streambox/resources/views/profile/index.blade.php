@extends('layouts.app')

@section('content')

<div class="container-profile">
    <h2>Mi perfil</h2>
    <br>
    <div class="profile-card">
        <p><strong>Nombre:</strong> {{ $profile->nombre }}</p>
        <p><strong>Email:</strong> {{ $profile->email }}</p>

        @if($profile->edad)
            <p><strong>Edad:</strong> {{ $profile->edad }}</p>
        @endif

        @if($profile->telefono)
            <p><strong>Teléfono:</strong> {{ $profile->telefono }}</p>
        @endif
    </div>
</div>
<br>
<a href="{{ route('profile.edit') }}" class="btn">
    <i class="fa-regular fa-pen-to-square"></i> Editar perfil
</a>
<br>
{{-- Botón volver --}}
<x-back-button :url="route('media.index')" />
@endsection
