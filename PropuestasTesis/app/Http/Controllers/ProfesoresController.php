<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Profesor;
use Carbon\Carbon;

class ProfesoresController extends Controller
{
    public function propuestas(){
        $propuestas = Propuesta::all();
        return view('profesores.propuestas',compact('propuestas'));
    }

    public function identificador($id){
        $profesores = Profesor::all();
        $propuesta = Propuesta::find($id);
        return view('profesores.identificador',compact(['propuesta','profesores']));
    }

    public function edit(Propuesta $propuesta,Profesor $profesor){
        //dd($profesor);
        return view('profesores.edit',compact(['profesor','propuesta']));
    }

    public function interseccion(Request $request, Propuesta $propuesta){
        $profesor = Profesor::find($request->id_profe);
        return redirect()->route('profesores.edit',[$propuesta->Id, $profesor->Id]);
    }

    public function create(){
        return view('profesores.create');
    }

    public function delete(){
        return view('profesores.delete');
    }

    public function store_comentario(Propuesta $propuesta, Profesor $profesor, Request $request){
        $propuesta->profesores()->attach($profesor->Id,['Fecha'=>Carbon::now(),'Hora'=>Carbon::now(),'Comentario'=>$request->mensaje]);
        return redirect()->route('profesores.propuestas');
    }

    public function destroy_comentario(Propuesta $propuesta, Profesor $profesor){
        $propuesta->profesoresConPivot()->detach($profesor->Id);
        return redirect()->route('profesores.propuestas');
    }
}
