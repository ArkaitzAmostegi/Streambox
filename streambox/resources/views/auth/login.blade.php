<x-guest-layout>
    <div class="container" style="max-width:420px; margin-top:100px;">
        <h1 style="text-align:center;">LOGIN</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div style="margin-top:20px;">
                <label>Email</label>
                <input type="email" name="email" required class="w-full">
            </div>

            <div style="margin-top:20px;">
                <label>Password</label>
                <input type="password" name="password" required class="w-full">
            </div>

            <div style="margin-top:15px;">
                <label>
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
            </div>

            <div style="margin-top:25px; text-align:center;">
                <button class="btn">Entrar</button>
            </div>

            <div style="margin-top:15px; text-align:center;">
                <a href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a>
            </div>
        </form>
    </div>
</x-guest-layout>
