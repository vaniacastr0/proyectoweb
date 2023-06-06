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
                                    <h5 class="card-title">Estado propuesta</h5>
                                    <p class="card-text">
                                        <li>{{ $Estados[$propuesta->Estado] }}</li>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('administradores.update', $propuesta->Id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg text-center">
                                        <h5 class="card-title">Actualizar estado</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg">
                                        <div class="check-group">
                                            <div class="row">
                                                <div class="col offset-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio" id="1"
                                                            value="1" @if($propuesta->Estado=='1') checked @endif>
                                                        <label class="form-check-label" for="1">Esperando
                                                            revisión</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio" id="2"
                                                            value="2" @if($propuesta->Estado=='2') checked @endif>
                                                        <label class="form-check-label" for="2">Modificar
                                                            propuesta</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio" id="3"
                                                            value="3" @if($propuesta->Estado=='3') checked @endif>
                                                        <label class="form-check-label" for="3">Rechazado</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio" id="4"
                                                            value="4" @if($propuesta->Estado=='4') checked @endif>
                                                        <label class="form-check-label" for="4">Aceptado</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-3 text-end">
                                        <button class="btn btn-light" type="submit">Editar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="col mt-3">
                            <a href="{{ route('profesores.propuestas') }}" class="btn btn-light">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

@endsection