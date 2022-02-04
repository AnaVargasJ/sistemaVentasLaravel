@extends('layouts.layout')

@section('titulo', 'Editar pedido')

@section('content')
    <h1 class="text-center my-5">Editar Pedido</h1>
    @if ($errors->any())

        <div class="alert alert-danger">
            <div class="header">
                <strong>Ups...</strong>algo salio mal
            </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <br><br>



    <form action="{{ route('pedidos.update', $pedidos->id) }}" method="post">
        @method('put')
        @csrf



        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Productos</label>
            <div class="col-d-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="idProducto"  id="idProducto" class="form-control selectpicker">
                        <option value="">Seleccione...</option>
                        @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}" @if ($pedidos->id == $producto->id)
                        selected
                @endif>
                {{ $pedidos->cantidadPedido }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="mb-3">
                <label class="col-md-4 control-label">Fecha</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="date" name="fecha" id="fecha" placeholder="fecha" class="form-control"value="{{ $pedidos->fecha }}">

                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label  for="cantidad"class="col-md-4 control-label">Cantidad pedido</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="cantidad" id="cantidad" placeholder="cantidad de pedido " class="form-control"value="{{ $pedidos->cantidad }}">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="col-md-4 control-label">valor Unidad #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input type="number" name="valorUnidad" id="valorUnidad" placeholder="valor Unidad " class="form-control"value="{{ $pedidos->valorUnidad }}">
                    </div>
                </div>
            </div>





            <div>
                <button type="submit" class="btn btn-success my-2"> Guardar </button>
            </div>
        </div>
    </form>
@endsection
