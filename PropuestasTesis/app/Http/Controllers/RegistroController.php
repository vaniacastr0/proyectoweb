<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
use App\Models\Propuesta;

class RegistroController extends Controller
{
    public function store_propuesta(Request $request){
        //dd($request);
        try{
            DB::beginTransaction();
            $propuesta = new Propuesta;
            $propuesta->Fecha = $request->input('fecha');
            $propuesta->Estado = $request->Estado ?? 1;
            $propuesta->Estudiante_rut = $request->input('rut');
            if($request->hasFile('pdf')){
            $archivo=$request->file('pdf');
            $archivo->move(public_path().'/documentos/', $archivo->getClientOriginalName());
            $propuesta->Documento=$archivo->getClientOriginalName();
            }
            $propuesta->save();
            DB::commit();
        } catch (Exception $e){
            DB::rollback();
        }

        return redirect()->route('estudiantes.lista_estado'); //CON LA RUTA PARA DEVOLVERSE NO ME SIRVE TT
    }
}