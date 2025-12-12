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
    <a href="{{ route('media.index') }}" style="text-decoration:none; color:black;">
        <h1>STREAMBOX</h1>
    </a>
    @isset($currentUser)
        <p>Bienvenido, 
            <a href="{{ route('profile.edit') }}" 
                style="padding:4px 8px; background:#addc92; border-radius:4px;">
                {{ $currentUser->name }}
            </a>
        </p>
    @endisset
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
