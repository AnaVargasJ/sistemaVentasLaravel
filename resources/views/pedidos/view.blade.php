@extends('layouts.layout')

@section('titulo', 'Pedido')
@section('content')


 <br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="" id="centro">
                <div class="" id="centro"><h3><b>Detalles del pedido</b></h3></div>

                <div class="card-body">
                    <table class="table table-borderless table-hover " style="text-align: center; ">
                        <thead >
                            <tr>
                                <th><b>Nombre: </b>{{ $pedido->nombre}}<br></th>
                            </tr>

                        <tr>
                            <th><b>Fecha: </b>{{ $pedido->fecha}}<br></th>
                        </tr>
                        <tr>
                            <th><b>Cantidad: </b>{{ $pedido->cantidadPedido }}<br></th>
                        </tr>
                        <tr>
                            <th><b>Precio :</b>{{ $pedido->valorUnidad }}<br></th>
                        </tr>

                    </thead>
                    </table>

                    <a href="{{ route('pedidos.index') }}" style="margin: auto" class="btn btn-success " >Volver</a>

                  <br>
@endsection
{{-- <td> <b>Nombre usuario: </b> {{ $reservacion->name }}<br></td>
<td> <b>Email del usuario: </b> {{ $reservacion->email }}<br></td>
<td> <b>Genero: </b> {{ $reservacion->genero }}<br></td>
<td> <b>Edad: </b> {{ $reservacion->edad }} años<br></td>
<td> <b>¿Fumador?: </b> {{ $reservacion->fumador }}<br></td><br> --}}
