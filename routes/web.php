<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PaginaController; // <-- Agregamos tu controlador principal

/*
|--------------------------------------------------------------------------
| Web Routes - Proyecto Completo SIS-500
|--------------------------------------------------------------------------
*/

// ==========================================
// 1. LAS 5 RUTAS DE TU PROYECTO PROFESIONAL (PaginaController)
// ==========================================

// Ruta para la página de inicio (Perfil Profesional)
Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');

// Ruta de Acerca de Mí
Route::get('/acerca', [PaginaController::class, 'acercaDeMi'])->name('acerca');

// Ruta de Materias Académicas (Conexión a phpMyAdmin)
Route::get('/materias', [PaginaController::class, 'materias'])->name('materias');

// Ruta de Habilidades Técnicas (El diseño moderno que creamos)
Route::get('/habilidades', [PaginaController::class, 'conocimientosHabilidades'])->name('habilidades');

// Rutas para el Formulario de Contacto (Mostrar y Procesar Validación)
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [PaginaController::class, 'procesarContacto'])->name('contacto.procesar');


// ==========================================
// 2. RUTAS DE ESTUDIANTES (Las que me pasaste)
// ==========================================

// Ruta para listar los estudiantes
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');

// Ruta para ver el detalle de un estudiante específico por su ID
Route::get('/estudiantes/{id}', [EstudianteController::class, 'detalle'])->name('estudiantes.detalle');