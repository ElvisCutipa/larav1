@extends('layouts/app')

@section('contenido')
<div class="card">
    <h2>Bienvenido a mi Perfil Profesional</h2>
    <p style="margin-top: 15px; line-height: 1.6;">
        Hola, soy estudiante de Ingeniería de Sistemas. En este espacio podrás conocer mi trayectoria académica, las competencias técnicas que he desarrollado y los proyectos en los que trabajo.
    </p>
    <br>
    <a href="{{ route('acerca') }}" class="btn">Saber más sobre mí →</a>
</div>
@endsection