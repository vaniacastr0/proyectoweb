@extends('templates.master')

@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')

<body style="background-color: #e9e5f3;">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <h3>Agregar Estudiante</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="card text-center">
                    <div class="card-header">
                        Agregar estudiante
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('administradores.store_estudiante') }}">
                            @csrf
                            {{-- rut --}}
                            <div class="mb-3">
                                <label for="rut" class="form-label">Rut</label>
                                <input type="text" id="rut" name="rut" class="form-control">
                            </div>
                            {{-- nombre --}}
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control">
                            </div>
                            {{-- apellido --}}
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" id="apellido" name="apellido" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" id="apellido" name="email" class="form-control">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button class="btn btn-info" type="reset">Cancelar</button>
                                <button class="btn btn-success" type="submit">Agregar Estudiante</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection