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
</ul>

@endsection
