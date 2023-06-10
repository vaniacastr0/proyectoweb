<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Propuesta;

class AdministradoresController extends Controller
{
    public function profesores(){
        $profesores = Profesor::orderBy('Apellido')->get();
        return view('administradores.profesores',compact('profesores'));
    }

    public function alumnos(){
        $estudiantes = Estudiante::orderBy('Apellido')->get();
        return view('administradores.alumnos',compact('estudiantes'));
    }

    public function propuestas_revisadas(){
        $propuestas = Propuesta::all();
        return view('administradores.propuestas_revisadas',compact('propuestas'));
    }

    public function edit($id){
        $propuesta = Propuesta::find($id);
        return view('administradores.edit',compact('propuesta'));
    }

    public function update(Request $request,$Id){
        $propuesta = Propuesta::find($Id);
        $propuesta->Estado = $request->input('radio');
        $propuesta->save();
        return redirect()->route('administradores.propuestas_revisadas');
    }

    public function create_estudiante(){
        return view('administradores.create_estudiante');
    }

    public function create_profesor(){
        return view('administradores.create_profesor');
    }

    public function store_profesor(Request $request){
        $profesor = new Profesor();
        $profesor->Email = $request->input('email');
        $profesor->Nombre = $request->input('nombre');
        $profesor->Apellido = $request->input('apellido');
        $profesor->save();
        return redirect()->route('administradores.profesores');
    }

    public function destroy_profesor(Profesor $profesor){
        $profesor->delete();
        return redirect()->route('administradores.profesores');
    }

    public function store_estudiante(Request $request){
        $estudiante = new Estudiante();
        $estudiante->Rut = $request->input('rut');
        $estudiante->Nombre = $request->input('nombre');
        $estudiante->Apellido = $request->input('apellido');
        $estudiante->Email = $request->input('email');
        $estudiante->save();
        return redirect()->route('administradores.alumnos');
    }

    public function destroy_estudiante(Estudiante $estudiante){
        $estudiante->delete();
        return redirect()->route('administradores.alumnos');
    }
}
