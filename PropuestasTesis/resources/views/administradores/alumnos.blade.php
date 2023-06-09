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
                <h3>Listado de alumnos</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="row bg-white">
                    <div class="col-12  py-3 order-last order-lg-first">
                        <!-- formulario -->
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <th>N</th>
                                        <th>Rut</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th class="d-none d-sm-table-cell">Email</th>
                                        <th>Eliminar</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($estudiantes as $num=>$estudiante)
                                        <tr>
                                            <td class="align-middle">{{ $num+1 }}</td>
                                            <td class="align-middle">{{ $estudiante->Rut }}</td>
                                            <td class="align-middle">{{ $estudiante->Nombre }}</td>
                                            <td class="align-middle">{{ $estudiante->Apellido }}</td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="d-sm-none">{{ $estudiante->Email }}</span>
                                                <span class="d-none d-sm-inline">{{ $estudiante->Email }}</span>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-first">
                                                        <form method="POST"
                                                            action="{{route('administradores.destroy_estudiante',$estudiante->Rut)}}">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger text-white">
                                                                <span class="material-symbols-outlined">delete</span>
                                                            </button>
                                                        </form>
                                                    </div>
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
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <a href="{{ route('administradores.create_estudiante') }}" class="btn btn-light">Agregar Alumno</a>
            </div>
        </div>
    </div>
</body>
@endsection

@section('script-referencias')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
@endsection