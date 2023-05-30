<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;

class AdministradoresController extends Controller
{
    public function profesores(){
        $profesores = Profesor::all();
        return view('administradores.profesores',compact('profesores'));
    }

    public function alumnos(){
        $estudiantes = Estudiante::all();
        return view('administradores.alumnos',compact('estudiantes'));
    }

    public function propuestas_revisadas(){
        return view('administradores.propuestas_revisadas');
    }
}
