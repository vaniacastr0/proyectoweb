@extends('templates.master')

@section('contenido-principal')

<body style="background-color: #e9e5f3;">
    <div class="container-fluid py-5">
        <h3 class="text-center mb-4 fw-bold">Detalles de propuesta</h3>
        <div class="row">
            <div class="col-12 col-lg-6 offset-3 mb-3">
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
            <div class="col-12 col-lg-6 offset-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Documento</h5>
                        <p class="card-text">{{$propuesta->Documento}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 offset-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Estado</h5>
                        <p class="card-text">{{$propuesta->Estado}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 offset-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Comentarios</h5>
                        <p class="card-text">comentario</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection