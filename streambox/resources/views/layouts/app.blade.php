<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Streambox</title>

    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="@yield('body-class', 'body-app')">

<header class="main-header">
    <a href="{{ route('media.index') }}" class="logo">
        <br>
        <h1>STREAMBOX</h1>
    </a>
    <br><br>
    @isset($currentUser)
        <p class="user-box">
            <a href="{{ route('profile.index') }}">       
                Bienvenido, {{ $currentUser->name }}
            </a>
        </p>
    @endisset
</header>

<main class="container">
    @yield('content')
</main>

<footer class="main-footer">
    <p>Proyecto Streambox · Laravel</p>
</footer>

</body>
</html>
