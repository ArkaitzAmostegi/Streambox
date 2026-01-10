<x-app-layout>
    <x-slot name="header">
        <h2>Dashboard</h2>
    </x-slot>

    <div class="container">
        <p>Bienvenido, {{ auth()->user()->name }}</p>
    </div>
</x-app-layout>
