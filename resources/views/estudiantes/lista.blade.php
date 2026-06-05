@extends('layouts.app')

@section('contenido')
    <h1>{{ $titulo }}</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Carrera</th>
                <th>Carnet Generado</th>
                <th>Nota Final</th>
                <th>Estado Actual</th>
                <th>Acciones Disponibles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $est)
                @php
                    // Mantenemos tu requisito visual de alternar fondos pastel según la nota
                    $esAprobado = $est->nota >= 51;
                    $colorFondo = $esAprobado ? '#e6f4ea' : '#fce8e6'; 
                @endphp
                <tr style="background-color: {{ $colorFondo }};">
                    <td>{{ $est->nombre }}</td>
                    <td>{{ $est->carrera }}</td>
                    <td><code>{{ $est->generarCarnet() }}</code></td>
                    <td>{{ $est->nota }}</td>
                    <td>
                        <span style="color: {{ $esAprobado ? '#137333' : '#c5221f' }}; font-weight: bold;">
                            {{ $est->getEstado() }}
                        </span>
                    </td>
                    <td>
                        <a class="btn" href="{{ route('estudiantes.detalle', $est->id) }}">
                            Ver Detalle
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection