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
    <div class="container-fluid d-flex flex-column justify-content-lg-center align-items-center">
        <div class="row">
            <div class="col-12 d-flex justify-content-center py-4">
                <h3>Listado de propuestas revisadas</h3>
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
                                            <th>Id</th>
                                            <th>Fecha</th>
                                            <th>Documento</th>
                                            <th>Estado</th>
                                            <th>Estudiante</th>
                                            <th>Editar</th>
                                            <th>Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($propuestas as $num=>$propuesta)
                                        <tr>
                                            <td class="align-middle">{{ $propuesta->Id }}</td>
                                            <td class="align-middle">{{ $propuesta->Fecha }}</td>
                                            <td class="align-middle">{{ $propuesta->Documento }}</td>
                                            <td class="align-middle">{{ $Estados[$propuesta->Estado] }}</td>
                                            <td class="align-middle">{{ $propuesta->Estudiante_rut }}</td>
                                            <td>
                                                <div class="col d-flex justify-content-center">
                                                    <a href="{{ route('administradores.edit', $propuesta->Id) }}"
                                                        class="btn btn-light">
                                                        <i class="material-symbols-outlined">edit</i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col d-flex justify-content-center">
                                                    <a href="documentos/{{ $propuesta->Documento}}" target="blank_"
                                                        class="btn btn-light">
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