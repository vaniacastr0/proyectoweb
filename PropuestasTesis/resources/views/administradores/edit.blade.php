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
                                <div class="col-12 col-lg-6">
                                    <h5 class="card-title">Nombre propuesta</h5>
                                    <p class="card-text">
                                        <li>Estudiante 1</li>
                                        <li>Estudiante 2</li>
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h5 class="card-title">Estado</h5>
                                    <p class="card-text">
                                        <li>Estado-propuesta</li>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <div class="col">
                    <a href="{{ route('profesores.propuestas') }}" class="btn btn-primary">Volver</a>
                </div>
            </div>
            <div class="col-6">
                <div class="col text-end">
                    <a href="{{ route('profesores.propuestas') }}" class="btn btn-primary">Editar estado</a>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection