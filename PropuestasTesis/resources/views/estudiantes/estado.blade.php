@extends('templates.master')

@section('contenido-principal')

<body style="background-color: #e9e5f3;">
    <div class="container-fluid py-5">
        <h3 class="text-center mb-4 fw-bold">Estado de propuesta</h3>
        <div class="row">
            <div class="col-12 col-lg-6 offset-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-title">Seleccione su RUT para ver sus propuestas</h6>
                        <div class="mb-3">
                            <label for="rut" class="form-label">Rut estudiante</label>
                            <select id="rut" name="rut" class="form-control">
                                @foreach($estudiantes as $estudiante)
                                <option value="{{$estudiante->Rut}}">{{$estudiante->Rut}}
                                </option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 offset-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-title">Documento</h6>
                        <p class="card-text">Nombre documento</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 offset-3 ">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Propuesta</h5>
                        <p class="card-text">{{ $Estados[$propuesta->Estado] }}</p>
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
                            cupiditate quod Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nisi quod
                            corrupti dolorem possimus officiis, perferendis atque tenetur tempore deserunt. Error
                            rerum aut, voluptates nam asperiores quidem nisi distinctio blanditiis?
                        </p>
                    </div>
                </div>
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