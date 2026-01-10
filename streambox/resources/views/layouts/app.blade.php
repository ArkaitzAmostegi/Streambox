<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Streambox') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>

<body class="body-app">

    @include('layouts.navigation')

    @isset($header)
        <header class="main-header">
            {{ $header }}
        </header>
    @endisset

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>
