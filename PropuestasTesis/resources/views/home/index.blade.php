@extends('templates.master')

@section('contenido-principal')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body style="background-color:rgb(247, 253, 255)">
    <div class="container-fluid min-vh-100  d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-white">
                    <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center"
                        style="height: 25rem;">
                        <div class="pb-2 bg-white">
                            <img src="imagenes/logo.png" style="width: 16rem;">
                        </div>
                        <h3>Ingreso de propuestas</h3>
                        <h6>Taller de Sistema de Información</h6>
                    </div>
                    <div class="col-12 col-lg-8 py-4">
                        <h4>Inicio de Sesión</h4>
                        <small>Proporcione sus credenciales para ingresar al sistema</small>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Nombre de Usuario</label>
                                        <input type="text" id="username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" class="form-control">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Estudiante</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Profesor</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Administrador</label>
                                    </div>
                                    <div class="mb-3 px-0 text-end d-flex align-items-last">
                                        <a href="home.html" target="_blank" class="btn btn-primary d-flex flex-column justify-content-center">
                                            <span class="material-symbols-outlined">favorite
                                            </span>iniciar sesion 
                                        </a>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection