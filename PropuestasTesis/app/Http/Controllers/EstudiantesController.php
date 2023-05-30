<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class EstudiantesController extends Controller
{
    public function ingreso(){
        return view('estudiantes.ingreso');
    }

    public function estado(){
        return view('estudiantes.estado');
    }
}

