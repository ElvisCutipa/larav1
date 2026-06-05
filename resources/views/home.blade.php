@extends('layouts.app')

@section('contenido')
    <h1>{{ $titulo }}</h1>
    
    <div class="card" style="max-width: 100%;">
        <h2>Estructura del Proyecto Concluida</h2>
        <p style="margin: 10px 0; color: #4a5568; line-height: 1.5;">
            Este entorno de desarrollo ha separado la capa de presentación (Vistas) de las validaciones operativas (Modelos), gestionado íntegramente por controladores centralizados y conectado a una base de datos MySQL relacional.
        </p>
        <p style="margin-bottom: 20px; color: #4a5568;">
            Utiliza el siguiente disparador para auditar la base de datos de los alumnos registrados.
        </p>

        <a class="btn" href="{{ route('estudiantes.index') }}">Gestionar Estudiantes →</a>
    </div>
@endsection