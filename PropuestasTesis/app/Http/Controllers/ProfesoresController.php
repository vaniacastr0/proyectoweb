<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfesoresController extends Controller
{
    public function propuestas(){
        return view('profesores.propuestas');
    }
}
