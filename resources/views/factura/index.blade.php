@extends('layouts.layout')

@section('titulo', 'Ventas')

@section('content')
    <h1 class="text-center pt-5 pb-3">Factura</h1>

    @if ($mensaje = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('factura.create') }}" class="btn btn-outline-dark mb-3 float-center">Facturar</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>idVenta</th>
                <th>Producto</th>
                <th>cantidad</th>
                <th>subTotal</th>

            </tr>

        </thead>
        <tbody>
            <tr>
                @foreach ($facturas as $factura )

                    <td>{{$factura->idVenta}}</td>
                    <td>{{ $factura->nombre}}</td>
                    <td>{{ $factura->cantidad}}</td>
                    <td>{{ $factura->subTotal}}</td>
                    {{-- <td>
                        <a href="{{ route('facturas.show', $factura->id) }}" class="btn btn-info">Detalles</a>
                        <form action="{{ route('factura.destroy', $factura->id) }}" method="post" class="d-inline-flex">
                            @csrf
                            {{-- @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('¿Confirma la eliminacion del producto  {{ $factura->nombre }}?')">Eliminar</button> --}}
                        {{--</form>
                    </td> --}}
                @endforeach
            </tr>

        </tbody>
    </table>


@endsection
