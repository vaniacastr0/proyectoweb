<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('hojas-estilo')
    <title>Home</title>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Propuestas Tesis</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='home.index') active @endif"
                                aria-current="page" href="{{ route('home.index') }}">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Estudiante
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark bg-secondary">
                                <li>
                                    <a class="nav-link @if(Route::current()->getName()=='estudiantes.ingreso') active @endif"
                                        href="{{ route('estudiantes.ingreso')}}">Ingreso de propuestas</a>
                                </li>
                        </li>
                        <li>
                            <a class="nav-link @if(Route::current()->getName()=='estudiantes.estado') active @endif"
                                href="{{ route('estudiantes.estado')}}">Estado de propuesta</a>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Administrador
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark bg-secondary">
                            <li>
                                <a class="nav-link @if(Route::current()->getName()=='administradores.profesores') active @endif"
                                    href="{{ route('administradores.profesores')}}">Listado de Profesores</a>
                            </li>
                            <li>
                                <a class="nav-link @if(Route::current()->getName()=='administradores.alumnos') active @endif"
                                    href="{{ route('administradores.alumnos')}}">Listado de Alumnos</a>
                            </li>
                            <li>
                                <a class="nav-link @if(Route::current()->getName()=='administradores.propuestas_revisadas') active @endif"
                                    href="{{ route('administradores.propuestas_revisadas')}}">Propuestas Revisadas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profesor
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark bg-secondary">
                            <li>
                                <a class="nav-link @if(Route::current()->getName()=='profesores.propuestas') active @endif"
                                    href="{{ route('profesores.propuestas')}}">Propuestas</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </li>
                </div>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                </form>
            </div>
        </nav>
    </div>

    <!-- contenido principal -->
    <div class="container-fluid">
        @yield('contenido-principal')
    </div>

    @yield('script-referencias')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    @yield('script-manual')
</body>

</html>