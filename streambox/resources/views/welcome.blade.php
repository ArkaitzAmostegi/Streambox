<x-guest-layout>
    <div class="container body-welcome" style="text-align:center; margin-top:80px;">
        <h1 class="logo">STREAMBOX</h1>
        <p>Tu plataforma multimedia.</p>

        <div style="margin-top:30px;">
            @auth
                <a href="{{ route('media.index') }}" class="btn">Entrar</a>
            @else
                <a href="{{ route('login') }}" class="btn">Login</a>
                <a href="{{ route('register') }}" class="btn">Register</a>
            @endauth
        </div>
    </div>
</x-guest-layout>
