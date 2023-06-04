<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;


class ProfesoresController extends Controller
{
    public function propuestas(){
        $propuestas = Propuesta::all();
        return view('profesores.propuestas',compact('propuestas'));
    }

    public function edit($id){
        $propuesta = Propuesta::find($id);
        return view('profesores.edit',compact('propuesta'));
    }

    public function create(){
        return view('profesores.create');
    }

    public function delete(){
        return view('profesores.delete');
    }
}
