@php
$Estados = [1 =>'Esperando Revisión',2=>'Modificar Propuesta',3=>'Rechazado',4=>'Aceptado'];
@endphp

@extends('templates.master')

@section('contenido-principal')

<body style="background-color: #e9e5f3;">
    <div class="container-fluid py-5">
        <h3 class="text-center mb-4 fw-bold">Detalles de propuesta</h3>
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <h5 class="card-title">Rut estudiante</h5>
                            <p class="card-text">{{$propuesta->Estudiante_rut}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Documento</h5>
                        <p class="card-text">{{$propuesta->Documento}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Estado</h5>
                        <p class="card-text">{{ $Estados[$propuesta->Estado] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3 mb-3">
                <div class="card">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-center">Comentarios</h5>
                            </div>
                        </div>
                        <hr>
                        @if(count($propuesta->profesoresConPivot)>0)
                            @foreach($comentarios as $comentario)
                                <div class="row">
                                    <div class="col  text-center">
                                        <p>{{$profesores->where('Id',$comentario->pivot->Profesor_Id)->first()->Nombre}}
                                            {{$profesores->where('Id',$comentario->pivot->Profesor_Id)->first()->Apellido}}:
                                        </p>
                                    </div>
                                    <div class="col  text-center">
                                        <p>{{$comentario->pivot->Comentario}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col  text-center">
                                <p>No hay comentarios aún</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col offset-lg-2">
                        <a href="{{ route('estudiantes.lista_estado') }}" class="btn btn-light">Volver</a>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection