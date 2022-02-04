@extends('layouts.layout')

@section('titulo', 'Pedidos')
@section('content')
<br><button></button>
    <h1 class = "text-center pt-5 pb-3">Pedidos</h1>
<br>
    @if($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($query)
    <div class="alert alert-success alert-dismissible fade show">
        <p>Los resultadOs de la busqueda <strong>{{ $query }} </strong> Son:</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <a href="{{ route('pedidos.create') }}" class="btn btn-success mb-3 float-center">Crear Pedido</a>
<br>
    <table class="table table-borderless table-hover">
        <thead id="centro">
            <tr id="centro">
                <th id="centro">Nombre Producto</th>
                <th id="centro">fecha</th>
                <th id="centro">cantidad</th>
                <th id="centro">valor unidad</th>
                <th id="centro">acciones</th>
            </tr>
        </thead id="centro">
        <tbody id="centro">
            @foreach ($pedidos as $pedido)
                <tr id="centro">
                    <td id="centro">{{ $pedido->nombre}}</td>
                    <td id="centro"> {{ $pedido->fecha }} </td>
                    <td id="centro"> {{ $pedido->cantidadPedido }} </td>
                    <td id="centro"> {{ $pedido->valorUnidad }} </td>
                    <td id="centro">
                        <a  id="centro"href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info">Detalles</a>
                        <a id="centro" href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning">Editar</a>
                        <form id="centro" action="{{ route('pedidos.destroy', $pedido->id) }}" method="post" class="d-inline-flex">
                            @csrf
                            @method('DELETE')
                            <button id="centro" type="submit" class="btn btn-danger" onclick="return confirm('¿Confirma la eliminacion de el Pedido  {{ $pedido->cantidad }}?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
