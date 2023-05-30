@extends('templates.master')

@section('contenido-principal')
<div style="background: linear-gradient(to bottom, #4e4e4e 43%, #fdfdfd 100%);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-center">
                <h1>Propuestas de Tesis</h1>
            </div>
            <div class="col-12 col-lg-3 bg-section">
                <div class="m-3 p-3 rounded bg-white border">
                    <img src="imagenes/logo.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name">
                        <div id="name" class="form-text">Ingrese su nombre completo</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                        <div id="name" class="form-text">Ingrese su contraseña</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Para que sirve?</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio in ullam rem
                            itaque laboriosam facilis nulla delectus vel, excepturi libero cupiditate expedita neque,
                            ipsum
                            voluptatum provident aperiam non dicta! Sapiente.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection