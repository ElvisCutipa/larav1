<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia; // Importamos el modelo de la Base de Datos

class PaginaController extends Controller
{
    public function inicio()
    {
        $titulo = "Inicio — Perfil Profesional";
        return view('inicio', compact('titulo'));
    }

    public function acercaDeMi()
    {
        $titulo = "Acerca de Mí";
        return view('acerca', compact('titulo'));
    }

    public function materias()
    {
        $titulo = "Mis Materias Académicas";
        // Trae de phpMyAdmin la materia SIS-500 y las que agregues
        $materias = Materia::all(); 
        
        return view('materias', compact('titulo', 'materias'));
    }

    /**
     * RUTA: GET /habilidades
     * Muestra la pantalla de habilidades técnicas con el diseño moderno.
     */
    public function conocimientosHabilidades()
    {
        $titulo = "Conocimientos y Habilidades Técnicas";
        // Retorna la vista habilidades.blade.php que creamos hace un momento
        return view('habilidades', compact('titulo'));
    }

    public function contacto()
    {
        $titulo = "Formulario de Contacto";
        return view('contacto', compact('titulo'));
    }

    // Requisito crítico del hito: Validación del formulario
    public function procesarContacto(Request $request)
    {
        $request->validate([
            'nombre'  => 'required|string|max:100',
            'email'   => 'required|email',
            'mensaje' => 'required|string|min:10',
        ]);

        // Aquí se procesaría el mensaje (enviar correo o guardar en BD)
        return back()->with('success', '¡Gracias por contactarme! Tu mensaje ha sido validado y enviado correctamente.');
    }
}