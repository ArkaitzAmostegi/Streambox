<x-guest-layout>
    <div class="container" style="max-width:420px; margin-top:80px;">
        <h1 style="text-align:center;">REGISTER</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div style="margin-top:20px;">
                <label>Nombre</label>
                <input type="text" name="name" required>
            </div>

            <div style="margin-top:20px;">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div style="margin-top:20px;">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div style="margin-top:20px;">
                <label>Confirmar password</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <div style="margin-top:30px; text-align:center;">
                <button class="btn">Crear cuenta</button>
            </div>

            <div style="margin-top:15px; text-align:center;">
                <a href="{{ route('login') }}">¿Ya tienes cuenta?</a>
            </div>
        </form>
    </div>
</x-guest-layout>
