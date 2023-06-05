<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ProfesoresPropuestasSeeder extends Seeder
{
    
    public function run()
    {
        $horaActual = Carbon::now()->format('H:i:s');
        DB::table('profesor_propuesta')->insert([
            ['Propuesta_Id'=>'1','Profesor_Id' => '1','Fecha'=>Carbon::now(),'Hora'=>$horaActual,'Comentario'=>'asdasdsadsdasddsdsa'],
            ['Propuesta_Id'=>'2','Profesor_Id' => '2','Fecha'=>Carbon::now(),'Hora'=>$horaActual,'Comentario'=>'Hace algo nuevo tu propuesta no va a lugar'],
            ['Propuesta_Id'=>'3','Profesor_Id' => '3','Fecha'=>Carbon::now(),'Hora'=>$horaActual,'Comentario'=>'mal redactado hacelo tod de nuevo'],
        ]);    
    }
}