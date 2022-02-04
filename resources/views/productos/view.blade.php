@extends('layouts.layout')

@section('titulo', 'detalles del producto')

@section('content')

<br><br><br><br>


<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="" id="centro">
            <div class="" id="centro"><h3><b>Detalles del producto</b></h3></div>

            <div class="card-body">
      <table class="table table-borderless table-hover " style="text-align: center; ">
        <thead >
            <tr>
                <th><b>Nombre:  </b>{{ $producto->nombre}}<br></th>
            </tr>

            </thead>
            <tr>
                <th><b>Marca: </b>{{ $producto->marca }}<br></th>
            </tr>
            <tr>
                <th><b>Precio: </b>{{ $producto->valorUnidad }}<br></th>
            </tr>
            <tr>
                <th><b>Stock: </b>{{ $producto->stock }}<br></th>
            </tr>
            <tr>
                <th><b>Cantidad minima: </b>{{ $producto->cantidadMinima }}<br></th>
            </tr>
            <tr>
                <th><b>Cantidad vendida: </b>{{ $producto->cantidadVendida }}<br></th>
            </tr>
            <tr>
                <th><b>Cantidad baja: </b>{{ $producto->cantidadBaja }}<br></th>
            </tr>

        </table>
        <br>
        <a href="{{ route('productos.index') }}" class="btn btn-info">Volver</a>







    @endsection:</h3>
