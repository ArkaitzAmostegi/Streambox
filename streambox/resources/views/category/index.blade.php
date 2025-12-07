@extends('layouts.app')

@section('content')

<h2>Categorías</h2>

<ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('category.media', $category->id) }}">
                {{ $category->nombre }}
            </a>
        </li>
    @endforeach

    {{-- Solo mostrar si el usuario actual es admin --}}
    @if ( $currentUser && $currentUser->role === 'admin')
        <li>
            <a href="{{ route('director.index')}}">Directores</a> 
        </li>
        <li>
            <a href="{{ route('genre.index')}}">Géneros</a>
        </li> 
    @endif
</ul>

@endsection
