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
            ['id' => '1', 'fecha' => Carbon::now(), 'documento' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', 'estado' => 'aceptado', 'estudiante_rut' => '12345678-9'],
            ['id' => 2, 'fecha' => Carbon::now(), 'documento' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.', 'estado' => 'rechazado', 'estudiante_rut' => '54321098-7'],
            ['id' => 3, 'fecha' => Carbon::now(), 'documento' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur.', 'estado' => 'modificar', 'estudiante_rut' => '12345678-9'],
        ]);
    }
}
