@extends('templates.master')


@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')

<body>
    <div class="container d-flex justify-content-center align-items-center mt-3 mb-3 pt-3">
        <div class="row">
            <div class="col">
                <div>
                    <h1>Ver Propuesta</h1>
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    Agregar comentarios
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <textarea id="mensaje" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col text-end">
                                    <a href="#" class="btn btn-primary">Enviar comentarios</a>
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
            <div class="col-1">
                <div class="col text-end">
                    <a href="{{ route('profesores.propuestas') }}" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection