@extends('templates.master')

@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')
<body style="background-color: #e9e5f3;">
    <div class="container-fluid d-flex flex-column justify-content-lg-center align-items-center">
        <div class="row">
            <div class="col-12 d-flex justify-content-center py-4">
                <h3>Listado de propuestas inscritas</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="row bg-white">
                    <div class="col-12  py-3 order-last order-lg-first">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Rut estudiante</th>
                                            <th>Documento</th>
                                            <th>Ver Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($propuestas as $propuesta)
                                        <tr>
                                            <td>{{ $propuesta->Estudiante_rut }}</td>
                                            <td>{{ $propuesta->Documento }}</td>
                                            <td> 
                                                <div class="col d-flex justify-content-center">
                                                    <a href="{{ route('estudiantes.ver_estado', $propuesta->Id) }}"  class="btn btn-light">
                                                        <i class="material-symbols-outlined">visibility</i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection