<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streambox</title>

    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>

<body>

<header>
    <a href="{{ route('category.index') }}" style="text-decoration:none; color:black;">
        <h1>STREAMBOX</h1>
    </a>
    @if ($currentUser)
        <p>Bienvenido, {{ $currentUser->name }}</p>
    @endif
    <hr>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <hr>
    <p>Proyecto Streambox Laravel</p>
</footer>

</body>
</html>
