@php
$Estados = [1 =>'Esperando Revisión',2=>'Modificar Propuesta',3=>'Rechazado',4=>'Aceptado'];
@endphp

@extends('templates.master')


@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')

<body style="background-color: #e9e5f3;">
    <div class="container d-flex justify-content-center align-items-center mt-3 mb-3 pt-3">
        <div class="row">
            <div class="col">
                <div>
                    <h3>Editar Propuesta</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-lg-6 text-center mt-3">
                                    <h5 class="card-title">Id propuesta</h5>
                                    <p class="card-text">
                                        <li>{{$propuesta->Id}}</li>
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6 text-center mt-3">
                                    <h5 class="card-title">Estado</h5>
                                    <p class="card-text">
                                        <li>{{ $Estados[$propuesta->Estado] }}</li>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(count($propuesta->profesoresConPivot->where('pivot.Profesor_Id',$profesor->Id))>0)
                                <div class="row">
                                    <div class="col-12 mb-2 text-center">
                                        <h5>Borrar comentarios</h5>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="comentario" name="comentario"
                                            placeholder="{{$propuesta->profesoresConPivot->where('pivot.Profesor_Id',$profesor->Id)->first()->pivot->Comentario}}"
                                            disabled>
                                    </div>
                                </div>
                                <form method="POST" action="{{route('profesores.destroy_comentario',[$propuesta->Id,$profesor->Id] )}}">
                                    @method('delete')
                                    @csrf
                                    <div class="row">
                                        <div class="col text-end mt-3">
                                            <button class="btn btn-light" type="submit">Borrar</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('profesores.store_comentario',[$propuesta->Id,$profesor->Id]) }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 mb-2 text-center">
                                            <h5>Agregar comentarios</h5>
                                        </div>
                                    </div>
                                    <!-- aqui iba el select de correos de profes -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="mensaje" name="mensaje">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-end mt-3">
                                            <button class="btn btn-light" type="submit">Comentar</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-1">
                <div class="col text-end">
                    <a href="{{ route('profesores.propuestas') }}" class="btn btn-light">Volver</a>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection