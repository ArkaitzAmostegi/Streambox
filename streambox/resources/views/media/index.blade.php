@extends('layouts.app')

@section('content')

<h2>Listado de {{ $category->nombre }}</h2>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Año</th>
            <th>Duración</th>
            <th>Director</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($media as $item)
            <tr>
                <td>{{ $item->titulo }}</td>
                <td>{{ $item->descripcion }}</td>
                <td>{{ $item->anio }}</td>
                <td>{{ $item->duracion }}</td>
                <td>{{ $item->director->nombre ?? 'Sin director' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay contenido en esta categoría.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
