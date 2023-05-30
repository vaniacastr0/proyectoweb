<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    public function profesores(){
        return view('administradores.profesores');
    }

    public function alumnos(){
        return view('administradores.alumnos');
    }

    public function propuestas_revisadas(){
        return view('administradores.propuestas_revisadas');
    }
}
