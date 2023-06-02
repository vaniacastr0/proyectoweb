<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;



class EstudiantesController extends Controller
{
    public function ingreso(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.ingreso', compact('estudiantes'));
    }

    public function estado(){
        return view('estudiantes.estado');
    }
}

