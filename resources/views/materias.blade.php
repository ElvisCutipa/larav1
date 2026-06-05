@extends('layouts/app')

@section('contenido')
<div class="card">
    <h2>Materias Cursadas</h2>
    <p style="margin-bottom: 20px; color: #555;">La siguiente lista se recupera de manera dinámica desde la base de datos MySQL mediante Eloquent ORM.</p>
    
    <table>
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre de la Materia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias as $materia)
                <tr>
                    <td><code>{{ $materia->sigla }}</code></td>
                    <td>{{ $materia->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection