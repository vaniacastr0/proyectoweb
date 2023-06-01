<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropuestasSeeder extends Seeder
{
    public function run()
    {
        DB::table('propuestas')->insert([
            ['Id' => '1', 'Fecha' => Carbon::now(), 'Documento' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', 'Estado' => '3', 'Estudiante_Rut' => '12345678-9'],
            ['Id' => '2', 'Fecha' => Carbon::now(), 'Documento' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.', 'Estado' => '2', 'Estudiante_Rut' => '45678901-2'],
            ['Id' => '3', 'Fecha' => Carbon::now(), 'Documento' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur.', 'Estado' => '1', 'Estudiante_Rut' => '78901234-5'],
        ]);
    }
}