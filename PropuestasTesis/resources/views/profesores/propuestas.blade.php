@extends('templates.master')

@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')

<body style="background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="row bg-white">
                    <div class="col-12  py-3 order-last order-lg-first">
                        <!-- formulario -->
                        <div class="d-flex justify-content-center mt-3 mb-1">
                            <h4>Propuestas enviadas por alumnos</h4>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ESTUDIANTES
                                                <span class="material-symbols-outlined">
                                                    school
                                                </span>
                                            </th>
                                            <th>PROFESOR GUÍA
                                                <span class="material-symbols-outlined">
                                                    person
                                                </span>
                                            </th>
                                            <th>PROPUESTAS
                                                <span class="material-symbols-outlined">
                                                    menu_book
                                                </span>
                                            </th>
                                            <th>EDITAR PROPUESTA
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ESTUDIANTE</td>
                                            <td>PROFESOR</td>
                                            <td>PROPUESTA</td>
                                            <td>
                                                <a href=" {{ route('profesores.ver') }}" class="btn btn-primary">
                                                    <i class="material-symbols-outlined">edit</i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ESTUDIANTE</td>
                                            <td>PROFESOR</td>
                                            <td>PROPUESTA</td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <span class="material-symbols-outlined">
                                                        add
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ESTUDIANTE</td>
                                            <td>PROFESOR</td>
                                            <td>PROPUESTA</td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <span class="material-symbols-outlined">
                                                        add
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ESTUDIANTE</td>
                                            <td>PROFESOR</td>
                                            <td>PROPUESTA</td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <span class="material-symbols-outlined">
                                                        add
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ESTUDIANTE</td>
                                            <td>PROFESOR</td>
                                            <td>PROPUESTA</td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <span class="material-symbols-outlined">
                                                        add
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ESTUDIANTE</td>
                                            <td>PROFESOR</td>
                                            <td>PROPUESTA</td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <span class="material-symbols-outlined">
                                                        add
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ESTUDIANTE</td>
                                            <td>PROFESOR</td>
                                            <td>PROPUESTA</td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <span class="material-symbols-outlined">
                                                        add
                                                    </span>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
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