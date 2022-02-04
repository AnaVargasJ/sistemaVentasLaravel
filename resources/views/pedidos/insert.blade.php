@extends('layouts.layout')

@section('titulo', 'Crear Pedido')

@section('content')

<br><br>
    <h1 class="text-center">Crear nuevo Pedido</h1>
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



    <form class="well form-horizontal" action="{{ route('pedidos.store') }}" method="post" id="insert_developer">
        @csrf
        @method('post')

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Productos</label>
            <div class="col-d-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="idProducto" class="form-control selectpicker">
                        <option value="">Seleccione...</option>
                        @foreach ($productos as $producto)
                            <option value="{{ $producto->id }}" @if (old('idProducto') == $producto->id)
                                selected
                        @endif>
                        {{ $producto->nombre }}
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
                        <input type="date" name="fecha" id="fecha" placeholder="fecha de la baja" class="form-control"
                            value="{{ old('fecha') }}">

                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label class="col-md-4 control-label">Cantidad pedido</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="cantidadPedido" id="cantidadPedido" placeholder="cantidad del pedido"
                            class="form-control" value="{{ old('cantidadPedido') }}">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="col-md-4 control-label">valor Unidad #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input type="number" name="valorUnidad" id="valorUnidad" placeholder="valor Unidad"
                            class="form-control" value="{{ old('valorUnidad') }}">
                    </div>
                </div>
            </div>





            <div>
                <button type="submit" class="btn btn-success my-2"> Guardar </button>
            </div>
        </div>
    </form>

@endsection
