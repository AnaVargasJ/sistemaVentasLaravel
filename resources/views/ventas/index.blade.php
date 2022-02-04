@extends('layouts.layout')

@section('titulo', 'Ventas')

@section('content')
<br><br>
    <h1 class="text-center pt-5 pb-3">Ventas</h1>
<br><br>
    @if ($mensaje = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('ventas.create') }}" class="btn btn-success mb-3 float-center">Crear Venta</a>
    <br>
    <table class="table table-borderless table-hover">
        <thead id="centro">
            <tr id="centro">
                <th id="centro">id</th>
                <th id="centro">Fecha</th>
                <th id="centro">cédula</th>
                <th id="centro">nombre</th>
                <th id="centro">Opciones</th>

            </tr>
        </thead id="centro">
        <tbody>
            @foreach ($ventas as $venta)
            <tr id="centro">
                <td id="centro">{{ $venta->id}}</td>
                <td id="centro">{{ $venta->fecha}}</td>
                <td id="centro">{{ $venta->cedula}}</td>
                <td id="centro">{{ $venta->nombreCliente}}</td>


                <td id="centro">
                    <a id="centro" href="{{ route('ventas.show', $venta->id) }}" class="btn btn-info">Detalles</a>
                    <form id="centro" action="{{ route('ventas.destroy', $venta->id) }}" method="post" class="d-inline-flex">
                        @csrf
                         @method('DELETE')
                        <button  id="centro"type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Confirma la eliminacion de la venta  {{ $venta->nombre }}?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>


@endsection
