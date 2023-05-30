@extends('templates.master')

@section('contenido-principal')
<body style="background-image: url(imagenes/fondo.jpg); background-size: cover">
    <div class="container p-4">
        <div class="col-12 col-lg-8 py-4">
            <h3 class="fw-bolder">Ingreso de propuestas</h3>

            <div class="card">
                <div class="card-title">
                    <div class="text-center py-3 bg-black">
                        <small class="text-light">Ingrese sus datos y propuesta</small>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nom" placeholder="Ingrese su nombre" required />
                        </div>

                        <div class="mb-3">
                            <label for="ape" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="ape" placeholder="Ingrese su apellido"
                                required />
                        </div>

                        <div class="mb-3">
                            <label for="rut" class="form-label">Rut</label>
                            <input type="text" class="form-control" id="rut" placeholder="Ingrese su rut" required />
                        </div>

                        <div class="mb-3">
                            <label for="mail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="mail" placeholder="Ingrese su email"
                                required />
                        </div>

                        <div class="mb-3">
                            <label for="prop" class="form-label">Propuesta</label>
                            <textarea class="form-control" id="prop" rows="3" maxlength="100"></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

@section('script-referencias')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
@endsection
