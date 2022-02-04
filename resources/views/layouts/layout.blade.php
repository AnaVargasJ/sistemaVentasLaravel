<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

    </style>
    <title>@yield('titulo')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar1">
        <div class="container-fluid">
            <div class="btn-menu" id="bar-menu">
                <label for="btn-menu"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg></label>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <div class="container">
                            <a class="nav-link dropdown-toggle" style="color:rgb(255, 255, 255)" ; href="#"
                                id="res"" role=" button" data-bs-toggle="dropdown" aria-expanded="true"> Categorias
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-dark dropdown-menu-macos mx-0 border-0 shadow"
                                style="width: 180px" aria-labelledby="navbarDropdownMenuLink"
                                id="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        style="font-size:small" href="{{ route('categorias.create') }}">
                                        <span class="d-inline-block bg-success rounded-circle"
                                            style="width: .5em; height:.5em"></span>Registrar
                                        Categoria
                                    </a>
                                </li>
                                <hr class="dropdown-divider">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        style="font-size:small" href="{{ route('categorias.index') }}">
                                        <span class="d-inline-block bg-danger rounded-circle"
                                            style="width: .5em; height:.5em"></span>Listar categorias
                                    </a>
                                </li>
                            </ul>
                    </li>


                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" style="color:rgb(255, 255, 255)" ; href="#" id="res"" role="
                            button" data-bs-toggle="dropdown" aria-expanded="true"> Productos
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark dropdown-menu-macos mx-0 border-0 shadow"
                            style="width: 180px" aria-labelledby="navbarDropdownMenuLink" id="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" style="font-size:small"
                                    href="{{ route('productos.create') }}">
                                    <span class="d-inline-block bg-warning rounded-circle"
                                        style="width: .5em; height:.5em"></span>Registrar
                                    Producto
                                </a>
                            </li>
                            <hr class="dropdown-divider">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" style="font-size:small"
                                    href="{{ route('productos.index') }}">
                                    <span class="d-inline-block bg-info rounded-circle"
                                        style="width: .5em; height:.5em"></span>Listar Productos
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" style="color:rgb(255, 255, 255)" ; href="#" id="res"" role="
                            button" data-bs-toggle="dropdown" aria-expanded="true"> Ventas
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark dropdown-menu-macos mx-0 border-0 shadow"
                            style="width: 180px" aria-labelledby="navbarDropdownMenuLink" id="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" style="font-size:small"
                                    href="{{ route('ventas.create') }}">
                                    <span class="d-inline-block bg-danger rounded-circle"
                                        style="width: .5em; height:.5em"></span>Registrar
                                    Venta
                                </a>
                            </li>
                            <hr class="dropdown-divider">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" style="font-size:small"
                                    href="{{ route('ventas.index') }}">
                                    <span class="d-inline-block bg-primary rounded-circle"
                                        style="width: .5em; height:.5em"></span>Listar Ventas
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" style="color:rgb(255, 255, 255)" ; href="#" id="res"" role="
                            button" data-bs-toggle="dropdown" aria-expanded="true"> Pedidos
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark dropdown-menu-macos mx-0 border-0 shadow"
                            style="width: 180px" aria-labelledby="navbarDropdownMenuLink" id="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" style="font-size:small"
                                    href="{{ route('pedidos.create') }}">
                                    <span class="d-inline-block bg-warning rounded-circle"
                                        style="width: .5em; height:.5em"></span>Registrar
                                    pedido
                                </a>
                            </li>
                            <hr class="dropdown-divider">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" style="font-size:small"
                                    href="{{ route('pedidos.index') }}">
                                    <span class="d-inline-block bg-success rounded-circle"
                                        style="width: .5em; height:.5em"></span>Listar pedidos
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" style="color:rgb(255, 255, 255)" ; href="#" id="res"" role="
                            button" data-bs-toggle="dropdown" aria-expanded="true"> Bajas
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark dropdown-menu-macos mx-0 border-0 shadow"
                            style="width: 180px" aria-labelledby="navbarDropdownMenuLink" id="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" style="font-size:small"
                                    href="{{ route('bajas.create') }}">
                                    <span class="d-inline-block bg-info rounded-circle"
                                        style="width: .5em; height:.5em"></span>Registrar
                                    Baja
                                </a>
                            </li>
                            <hr class="dropdown-divider">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" style="font-size:small"
                                    href="{{ route('bajas.index') }}">
                                    <span class="d-inline-block bg-danger rounded-circle"
                                        style="width: .5em; height:.5em"></span>Listar Bajas
                                </a>
                            </li>
                        </ul>
                    </li>



                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"
                        name="buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
            <br><br>

        </div>
    </nav>
</body>



<input type="checkbox" id="btn-menu">
<div class="container-menu">
    <div class="cont-menu">
        <nav>
            <h3 style="text-align: center; color:aliceblue; margin-left:-15%">Menu</h3>
            <br><br>

            <ul>
                <li>
                    <a href="{{ url('/') }}">Inicio</a>
                    <a href="{{ route('productos.index') }}">Productos</a>
                    <a href="{{ route('ventas.index') }}">Clientes</a>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                            style="font-size:small;background-color:rgba(41, 41, 41, 0.972);color:white; ">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                {{ __('Cerrar ') }}
                            </a>
                            <form id="logout-form"
                                action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest


            </ul>
        </nav>
        <label for="btn-menu">✖️</label>
    </div>
</div>

<div class="container">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}"></script>



</html>
