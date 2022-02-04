@extends('layouts.layout')

@section('titulo', 'Ventas')
@section('content')

    <div class="card">

    </div>
    <br><br>
    <h1 class="text-center pt-5 pb-3">Detalles de la Venta</h1>


    <table class="table">
        <thead id="centro">
            <tr id="centro">
                <th id="centro" scope="col">N.</th>
                <th id="centro" scope="col">Fecha</th>
                <th  id="centro"scope="col">Cédula</th>
                <th  id="centro"scope="col">Nombre Cliente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th id="centro" >{{ $ventas->id }}</th>
                <td id="centro">{{ $ventas->fecha }}</td>
                <td id="centro">{{ $ventas->cedula }}</td>
                <td id="centro">{{ $ventas->nombreCliente }}</td>
            </tr>

        </tbody>
    </table>
    <br><br>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Producto
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('facturas.store') }}" method="post">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <div class="col text-start">
                                <input class="form-control col-md-4 inputgray" type="hidden" name="idVenta" id="idVenta"
                                    placeholder="" value="{{ $ventas->id }}">
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Productos</label>
                                <div class="col-md-4 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                        <select name="idProducto" class="form-control selectpicker">
                                            <option value="">Seleccione...</option>
                                            @foreach ($productos as $producto)
                                                <option value="{{ $producto->id }}" @if (old('id') == $producto->id)
                                                    selected
                                            @endif>
                                            {{ $producto->nombre }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class=" table">
        <thead id="centro">
            <tr id="centro">
                <th scope="col" id="centro" hidden>id Producto</th>
                <th scope="col" id="centro">Nombre Producto</th>
                <th scope="col" id="centro">Valor Unidad</th>
                <th scope="col" id="centro">Cantidad</th>

                <th scope="col" id="centro">Subtotal</th>
            </tr>
        </thead id="centro">
        <tbody id="centro">
            @foreach ($facturas as $factura)
                <tr id="centro">
                    <th id="centro" hidden>{{ $factura->id }}</th>
                    <td id="centro" >{{ $factura->nombre }}</td>
                    <td id="centro">{{ $factura->valorUnidad}}</td>
                    <td id="centro">{{ $factura->cantidad }}</td>

                    @php
                        $subtotal = $factura ->valorUnidad * $factura->cantidad
                    @endphp
                    <td> {{$subtotal}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
 @php
    $total = 0
   // $subtotales = 0
 @endphp

<div><h2>TOTAL:</h2>
    @foreach ($facturas as $factura)
        @php
            // $subtotales = $factura->valorUnidad * $factura->cantidad
            $total += $factura->cantidad * $factura->valorUnidad;
        @endphp
    @endforeach

    <h4>$ {{$total}}</h4>

    <a href="{{ route('ventas.index') }}"  class="btn btn-success mt-3 mb-3">Volver</a>
</div>

@endsection
