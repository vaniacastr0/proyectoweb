@extends('templates.master')

@section('contenido-principal')

<body style="background-color: rgb(246, 248, 250);">
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
                        <div class="d-flex justify-content-center align-items-center mb-3 ">
                            <small>Proporcione sus credenciales para ingresar al sistema. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nullam vel ipsum at enim malesuada ullamcorper. Duis
                                blandit velit nec arcu varius, eget accumsan magna tincidunt. Duis ullamcorper mi nec
                                risus sodales Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, doloribus possimus nesciunt officiis sapiente vitae dolor dicta! Cupiditate illum ad dolore sit, esse dolorem, consequuntur assumenda doloremque accusamus in maxime!</small>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Rut</label>
                                                <input type="text" id="username" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Nombre</label>
                                                <input type="text" id="username" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Apellido</label>
                                                <input type="text" id="username" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Email</label>
                                                <input type="text" id="username" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="mb-3">
                                                <label for="prop" class="form-label">Propuesta</label>
                                                <textarea class="form-control" id="prop" rows="3" maxlength="100"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">fecha</label>
                                                <input type="date" id="username" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 text-end">
                                                <a href="#" class="btn btn-primary">Enviar</a>
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