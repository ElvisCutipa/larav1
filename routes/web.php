<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/acerca', [PaginaController::class, 'acerca'])->name('acerca');
Route::get('/habilidades', [PaginaController::class, 'habilidades'])->name('habilidades');
Route::get('/materias', [PaginaController::class, 'materias'])->name('materias');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [PaginaController::class, 'enviarContacto'])->name('contacto.enviar');