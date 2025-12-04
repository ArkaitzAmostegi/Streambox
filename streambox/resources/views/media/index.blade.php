
@extends('layout')

@section('content')
    <h2>Listado de Categorías</h2>

    {{-- Enlace para crear una nueva categoría --}}
    <a href="{{ route('categories.create') }}">Crear Nueva Categoría</a>
    <br><br>

    {{-- Tabla con todas las categorías registradas --}}
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
            <tr>
                {{-- Datos básicos de media --}}
                <td>{{ $media->id }}</td>
                <td>{{ $media->titulo }}</td>
                <td>{{ $media->descripcion }}</td>
                <td>{{ $media->descripcion }}</td>
                <td>{{ $media->descripcion }}</td>
                <td>{{ $media->descripcion }}</td>
                <td>{{ $media->descripcion }}</td>
                <td>{{ $media->descripcion }}</td>
                'titulo',
        'descripcion',
        'duracion',
        'anio',
        'tipo',
        'director_id'

                <td>
                    {{-- Enlace para editar --}}
                    <a href="{{ route('categories.edit', $media) }}">Editar</a>
                    
                    {{-- Formulario de borrado con confirmación --}}
                    <form action="{{ route('categories.destroy', $media) }}"
                            method="POST"
                            style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('¿Estás seguro?')">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
