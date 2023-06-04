<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;



class EstudiantesController extends Controller
{
    public function ingreso(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.ingreso', compact('estudiantes'));
    }

    public function ver_estado($id){
        $propuesta = Propuesta::find($id);
        return view('estudiantes.ver_estado', compact('propuesta'));
    }

    public function lista_estado(){
        $propuestas = Propuesta::all();
        return view('estudiantes.lista_estado', compact('propuestas'));
    }
}

