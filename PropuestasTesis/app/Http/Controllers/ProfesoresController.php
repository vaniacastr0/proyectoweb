<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfesoresController extends Controller
{
    public function propuestas(){
        return view('profesores.propuestas');
    }

    public function ver(){
        return view('profesores.ver');
    }

    public function create(){
        return view('profesores.create');
    }

    public function delete(){
        return view('profesores.delete');
    }
}
