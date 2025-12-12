@extends('layouts.app')

@section('content')

<div style="text-align:center; margin-top:40px;">
    
    <h1 style="font-size:48px; font-weight:bold;">STREAMBOX</h1>

    <p>Tu plataforma multimedia.</p>

    <a href="{{ route('media.index') }}"
        style="display:inline-block; padding:12px 25px; background:#4caf50; color:white;
                text-decoration:none; border-radius:8px; font-size:18px;">
        Entrar
    </a>

</div>

@endsection
