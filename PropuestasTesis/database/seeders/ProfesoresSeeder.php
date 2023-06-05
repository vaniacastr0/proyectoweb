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
            ['Email' => 'Esteban@gmail.com', 'Nombre' => 'Esteban', 'Apellido' => 'Rivera'],
            ['Email' => 'Cipriano@gmail.com', 'Nombre' => 'Cipriano', 'Apellido' => 'Campos'],
            ['Email' => 'Heliodoro@gmail.com', 'Nombre' => 'Heliodoro', 'Apellido' => 'Palmer'],
            ['Email' => 'Íñigo@gmail.com', 'Nombre' => 'Íñigo', 'Apellido' => 'Cabezas'],
            ['Email' => 'Susanita@gmail.com', 'Nombre' => 'Susanita', 'Apellido' => 'Delgado'],
            ['Email' => 'Fernando@gmail.com', 'Nombre' => 'Fernando', 'Apellido' => 'Sainz'],
            ['Email' => 'Dora@gmail.com', 'Nombre' => 'Dora', 'Apellido' => 'Bueno'],
            ['Email' => 'Adela@gmail.com', 'Nombre' => 'Adela' ,'Apellido' => 'Noguera'],
            ['Email' => 'Florentino@gmail.com', 'Nombre' => 'Florentino','Apellido' => 'Bosch'],
            ['Email' => 'María@gmail.com', 'Nombre' => 'María','Apellido' => 'Menéndez'],
        ]);
    }
}