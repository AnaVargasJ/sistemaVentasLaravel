@extends('layouts.layout')

@section('titulo', 'Productos')

@section('content')
<br><br>
    <h1 class="text-center pt-5 pb-3"><h1>Productos</h1>
    <br><br>
    @if ($mensaje = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($query)
    <div class="alert alert-success alert-dismissible fade show">
        <p>Los resultados de la busqueda <strong>{{ $query }} </strong> Son:</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ route('productos.create') }}" class="btn btn-success">Crear producto</a>
    <br><br>
    <table class="table table-borderless table-hover">
        <thead id="centro">
            <tr id="centro">
                <th id="centro">Nombre</th>
                <th id="centro">valor Unidad</th>
                <th id="centro">stock</th>
                <th id="centro">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr id="centro">
                <td id="centro">{{ $producto->nombre }}</td>
                <td id="centro">{{ $producto->valorUnidad }}</td>
                <td id="centro">{{ $producto->stock }}</td>
                <td id="centro">
                    <a id="centro" href="{{ route('productos.show', $producto->id) }}" class="btn btn-info">Detalles</a>
                    <a  id="centro"href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                    <form  id="centro"action="{{ route('productos.destroy', $producto->id) }}" method="post" class="d-inline-flex">
                        @csrf
                        @method('DELETE')
                        <button id="centro" type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Confirma la eliminacion del producto  {{ $producto->nombre }}?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @endif --}}
@endsection
