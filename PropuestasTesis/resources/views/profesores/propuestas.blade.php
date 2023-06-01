@extends('templates.master')

@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')

<body style="background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="row bg-white">
                    <div class="col-12  py-3 order-last order-lg-first">
                        <!-- formulario -->
                        <div class="d-flex justify-content-center mt-3 mb-1">
                            <h4>Listado de propuestas</h4>
                        </div>
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
                                            <th>Editar propuesta</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($propuestas as $num=>$propuesta)
                                        <tr>
                                            <td class="align-middle">{{ $propuesta->Id }}</td>
                                            <td class="align-middle">{{ $propuesta->Fecha }}</td>
                                            <td class="align-middle">{{ $propuesta->Documento }}</td>
                                            <td class="align-middle">{{ $propuesta->Estado }}</td>
                                            <td class="align-middle">{{ $propuesta->Estudiante_rut }}</td>
                                            <td> 
                                                <div class="col d-flex justify-content-center">
                                                    <a href="{{ route('profesores.edit') }}" class="btn btn-primary">
                                                        <i class="material-symbols-outlined">edit</i>
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