@extends('templates.master')

@section('contenido-principal')

<body style="background-color: #e9e5f3;">
    <div class="container-fluid d-flex flex-column justify-content-lg-center align-items-center">
        <div class="row">
            <div class="col-12 d-flex justify-content-center py-4">
                <h3>Ingreso de propuesta</h3>
            </div>
        </div>
    </div>
    <!-- contenido principal -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="row bg-white">
                    <div class="col-12  py-3 order-last order-lg-first">
                        <!-- formulario -->
                        <div class="d-flex justify-content-center mt-3 mb-1">
                            <h4>Crea tu propuesta</h4>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mb-3 text-center">
                            <small>Proporcione sus credenciales para ingresar al Sistema. Una vez ingresada su propuesta,
                                esta entrará en estado de "Esperando Revisión", para posteriormente ser revisada por los profesores y 
                                entregarle una retroalimentación.

                            </small>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('estudiantes.store_propuesta') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-12 col-lg">
                                            <h6>Seleccione su RUT para poder ingresar una propuesta</h6>
                                            <div class="mb-3">
                                                <label for="rut" class="form-label">Rut estudiante</label>
                                                <select id="rut" name="rut" class="form-control">
                                                    @foreach($estudiantes as $estudiante)
                                                    <option value="{{$estudiante->Rut}}">{{$estudiante->Rut}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="mb-3">
                                                    <label for="fecha" class="form-label">Fecha</label>
                                                    <input type="date" id="fecha" name="fecha" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg">
                                                <div class="mb-3">
                                                    <label for="pdf" class="form-label">Adjuntar Propuesta</label>
                                                    <input type="file" id="pdf" name="pdf" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 text-end">
                                                <button class="btn btn-light" type="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('script-referencias')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    @endsection