@extends('layouts/app')

@section('contenido')
<div class="card" style="max-width: 600px;">
    <h2>Contacto</h2>
    <p style="margin-bottom: 20px;">¿Tienes alguna consulta o propuesta de proyecto? Envíame un mensaje.</p>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contacto.procesar') }}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label style="display:block; margin-bottom:5px;">Nombre Completo:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
            @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display:block; margin-bottom:5px;">Correo Electrónico:</label>
            <input type="text" name="email" value="{{ old('email') }}" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display:block; margin-bottom:5px;">Mensaje:</label>
            <textarea name="mensaje" rows="5" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">{{ old('mensaje') }}</textarea>
            @error('mensaje') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn">Enviar Mensaje</button>
    </form>
</div>
@endsection