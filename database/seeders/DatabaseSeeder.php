<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamamos exclusivamente al seeder de tus materias académicas
        $this->call([
            MateriaSeeder::class,
        ]);
    }
}