@extends('layouts.app')

@section('contenido')
    <h1>{{ $titulo }}</h1>

    <div class="card">
        <dl>
            <dt>Estudiante:</dt>
            <dd>{{ $estudiante->nombre }}</dd>

            <dt>Carrera Asignada:</dt>
            <dd>{{ $estudiante->carrera }}</dd>

            <dt>Código Carnet:</dt>
            <dd><code>{{ $estudiante->generarCarnet() }}</code></dd>

            <dt>Correo Electrónico:</dt>
            <dd>{{ $estudiante->email }}</dd>

            <dt>Calificación:</dt>
            <dd>{{ $estudiante->nota }} Puntos</dd>

            <dt>Situación:</dt>
            <dd>
                @php 
                    $aprobado = $estudiante->nota >= 51;
                    $colorSemaforo = $aprobado ? '#137333' : '#c5221f';
                @endphp
                <strong style="color: {{ $colorSemaforo }}; background: white; padding: 2px 8px; border-radius: 4px; border: 1px solid {{ $colorSemaforo }};">
                    {{ $estudiante->getEstado() }}
                </strong>
            </dd>
        </dl>
        
        <br style="clear: both;">
        <a class="btn btn-volver" href="{{ route('estudiantes.index') }}">← Volver a la Lista</a>
    </div>
@endsection