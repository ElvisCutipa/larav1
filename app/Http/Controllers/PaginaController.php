<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function acerca()
    {
        return view('acerca');
    }

    public function habilidades()
    {
        return view('habilidades');
    }

    public function materias()
    {
        // Recupera todas las materias de la Base de Datos
        $materias = Materia::all();
        return view('materias', compact('materias'));
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function enviarContacto(Request $request)
    {
        // Validación estricta requerida para Programación Avanzada
        $request->validate([
            'nombre'  => 'required|min:3|max:50',
            'correo'  => 'required|email',
            'mensaje' => 'required|min:10|max:500',
        ], [
            'nombre.required'  => 'El nombre es obligatorio.',
            'nombre.min'       => 'El nombre debe tener al menos 3 caracteres.',
            'correo.required'  => 'El correo electrónico es obligatorio.',
            'correo.email'     => 'Ingresa un formato de correo válido (ejemplo@dominio.com).',
            'mensaje.required' => 'El mensaje no puede quedar vacío.',
            'mensaje.min'      => 'El mensaje debe ser más descriptivo (mínimo 10 caracteres).',
        ]);

        // Si pasa la validación, retorna con mensaje de éxito
        return back()->with('exito', '¡Formulario validado y procesado exitosamente en el Servidor PHP!');
    }
}