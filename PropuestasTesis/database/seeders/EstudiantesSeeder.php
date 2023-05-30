<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('estudiantes')->insert([
            ['Rut' => '12345678-9', 'Nombre' => 'Juan', 'Apellido' => 'Pérez', 'Email' => 'juan@gmail.com' ],
            ['Rut' => '98765432-1', 'Nombre' => 'María', 'Apellido' => 'Gómez', 'Email' => 'maria@gmail.com' ],
            ['Rut' => '45678901-2', 'Nombre' => 'Carlos', 'Apellido' => 'Ramírez', 'Email' => 'carlos@gmail.com'],
            ['Rut' => '23456789-0', 'Nombre' => 'Laura', 'Apellido' => 'López', 'Email' => 'laura@gmail.com'],
            ['Rut' => '78901234-5', 'Nombre' => 'Pedro', 'Apellido' => 'Rodríguez', 'Email' => 'pedro@gmail.com'],
            ['Rut' => '34567890-1', 'Nombre' => 'Ana', 'Apellido' => 'Sánchez', 'Email' => 'ana@gmail.com'],
            ['Rut' => '90123456-7', 'Nombre' => 'José', 'Apellido' => 'García', 'Email' => 'jose@gmail.com'],
            ['Rut' => '56789012-3', 'Nombre' => 'Sofía', 'Apellido' => 'Martínez', 'Email' => 'sofia@gmail.com'],
            ['Rut' => '89012345-6', 'Nombre' => 'Diego', 'Apellido' => 'Hernández', 'Email' => 'diego@example.com'],
            ['Rut' => '21124251-5', 'Nombre' => 'Montserrat', 'Apellido' => 'Mora', 'Email' => 'Monserrat@gmail.com'],
            
        ]);
    }
}
