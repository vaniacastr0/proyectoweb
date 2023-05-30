@extends('templates.master')

@section('contenido-principal')
<body style="background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="row bg-white">
                    <div class="col-12  py-3 order-last order-lg-first">
                        <!-- formulario -->
                        <div class="d-flex justify-content-center mt-3 mb-1">
                            <h4>Listado de Alumnos</h4>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <th>N</th>
                                        <th>Rut</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($estudiantes as $num=>$estudiante)
                                        <tr>
                                            <td class="align-middle">{{ $num+1 }}</td>
                                            <td class="align-middle">{{ $estudiante->Rut }}</td>
                                            <td class="align-middle">{{ $estudiante->Nombre }}</td>
                                            <td class="align-middle">{{ $estudiante->Apellido }}</td>
                                            <td class="align-middle">{{ $estudiante->Email }}</td>
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
</body>
@endsection

@section('script-referencias')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
@endsection