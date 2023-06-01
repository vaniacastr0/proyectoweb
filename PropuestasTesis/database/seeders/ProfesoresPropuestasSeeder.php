<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

$horaActual = Carbon::now()->format('H:i:s');

class ProfesoresPropuestasSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('profesor_propuestas')->insert([
            ['propuesta_id'=>'1','profesor_rut' => '7834358-3','fecha'=>Carbon::now(),'hora'=>$horaActual,'comentarios'=>''],
            ['propuesta_id'=>'2','profesor_rut' => '63704068-5','fecha'=>Carbon::now(),'hora'=>$horaActual,'comentarios'=>'Hace algo nuevo tu propuesta no va a lugar'],
            ['propuesta_id'=>'3','profesor_rut' => '6213232-9','fecha'=>Carbon::now(),'hora'=>$horaActual,'comentarios'=>'mal redactado hacelo tod de nuevo'],

        ]);    
    }
}