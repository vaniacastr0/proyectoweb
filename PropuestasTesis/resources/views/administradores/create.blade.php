@extends('templates.master')

@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')

<body style="background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <h3>Agregar Profesores y Alumnos</h3>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card text-center">
                        <div class="card-header">
                            Agregar Profesor
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Rut</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Ingese Rut...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Nombre</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Ingese Nombre...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Apellido</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Ingese Apellido...">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card text-center">
                        <div class="card-header">
                            Agregar Alumno
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Rut</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Ingese Rut...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Nombre</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Ingese Nombre...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Apellido</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Ingese Apellido...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Email</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        placeholder="Ingese Email...">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
@endsection