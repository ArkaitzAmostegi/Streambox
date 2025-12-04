<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streambox</title>

    {{-- Link a CSS  en /public --}}
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>

<body>
    <header>
        <h1>STREAMBOX</h1>

        {{-- Mensajes de éxito --}}
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        {{-- Mensajes de error --}}
        @if (session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        <nav>

            <ul>
                {{-- Enlaces hacia diferentes módulos CRUD --}}
                <li><a href="">Media</a></li>
                <li><a href="">Género</a></li>
                <li><a href="">Directores </a></li>
            </ul>
        </nav>

        <hr>
    </header>

    {{-- Aquí va el Contenido dinámico de cada vista --}}
    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>Proyecto Streambox Laravel</p>
    </footer>
</body>
</html>
