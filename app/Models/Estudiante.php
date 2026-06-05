<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    // Opcional: Laravel asume por defecto que la tabla se llama 'estudiantes'
    protected $table = 'estudiantes';

    // Campos que permitiremos registrar en masa (Formularios)
    protected $fillable = ['nombre', 'email', 'matricula', 'carrera', 'nota'];

    /**
     * Mantiene el algoritmo original de tu archivo Estudiante.php
     * Extrae las primeras 3 letras de la carrera en mayúsculas y añade la matrícula.
     */
    public function generarCarnet(): string
    {
        $siglaCarrera = strtoupper(substr($this->carrera, 0, 3));
        return $siglaCarrera . "-" . $this->matricula;
    }

    /**
     * Mantiene la condición de aprobación original (Nota >= 51)
     */
    public function getEstado(): string
    {
        return $this->nota >= 51 ? 'Aprobado' : 'Reprobado';
    }
}
