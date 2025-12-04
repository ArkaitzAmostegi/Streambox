
@extends('layouts.app')

@section('content')
    <h2>Bienvenido a Streambox</h2>
    <p>Selecciona una categoría desde el menú.</p>

    <ul>
        @foreach (\App\Models\Category::all() as $category)
            <li>
                <a href="{{ route('category.media', $category->id) }}">
                    {{ $category->nombre }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
