<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('profesores')->insert([
            ['Rut' => '9967539-k', 'Nombre' => 'Esteban', 'Apellido' => 'Rivera'],
            ['Rut' => '7834358-3', 'Nombre' => 'Cipriano', 'Apellido' => 'Campos'],
            ['Rut' => '2732892-k', 'Nombre' => 'Heliodoro', 'Apellido' => 'Palmer'],
            ['Rut' => '5817946-9', 'Nombre' => 'Íñigo', 'Apellido' => 'Cabezas'],
            ['Rut' => '27612300-9', 'Nombre' => 'Susanita', 'Apellido' => 'Delgado'],
            ['Rut' => '43754427-1', 'Nombre' => 'Fernando', 'Apellido' => 'Sainz'],
            ['Rut' => '63704068-5', 'Nombre' => 'Dora', 'Apellido' => 'Bueno'],
            ['Rut' => '63795615-9', 'Nombre' => 'Adela', 'Apellido' => 'Noguera'],
            ['Rut' => '15168127-1', 'Nombre' => 'Florentino', 'Apellido' => 'Bosch'],
            ['Rut' => '6213232-9', 'Nombre' => 'María', 'Apellido' => 'Menéndez'],
        ]);
    }
}