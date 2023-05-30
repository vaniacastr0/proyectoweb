@extends('templates.master')

@section('contenido-principal')
<body style="background: linear-gradient(to bottom, #ccd5b6, #b06f45, #86c769)">
    <div class="container-fluid py-5">
        <h1 class="text-center mb-4 fw-bold">Estado de propuesta</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="p-3 text-center">
                        <img src="imagenes/megumi.jpg" class="card-img-top rounded-circle"/>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Propuesta</h5>
                        <p class="card-text">Estado:</p>
                        <a href="#" class="btn btn-primary">Ver comentarios</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Comentarios</h5>
                        <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero
                            odit a eligendi ducimus sed neque ipsa praesentium qui
                            cupiditate quod?
                        </p>
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