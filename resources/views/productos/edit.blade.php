@extends('layouts.layout')

@section('titulo','Editar producto')

@section('content')
    <h1 class="text-center my-5">Editar Producto</h1>
    @if ($errors->any())

    <div class="alert alert-danger">
        <div class="header">
            <strong>Ups..</strong>algo salio mal
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('productos.update',$producto->id) }}" method="post">
            @method('put')
            @csrf

            <div class="mb-3">
                <label class="col-md-4 control-label">Nombre </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" class="form-control" id="nombre"  name="nombre"aria-describedby="nombre" value="{{ $producto->nombre }}">
                    </div>
                </div>
            </div>



            <div class="mb-3">
                <label class="col-md-4 control-label">Marca </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" class="form-control" id="marca"  name="marca"aria-describedby="marca" value="{{ $producto->marca }}">
                    </div>
                </div>
            </div>



            <div class="mb-3">
                <label class="col-md-4 control-label">Valor unidad </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="number" class="form-control" id="valorUnidad"  name="valorUnidad"aria-describedby="valorUnidad" value="{{ $producto->valorUnidad }}">
                    </div>
                </div>
            </div>



            <div class="mb-3">
                <label class="col-md-4 control-label">Stock </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="number" class="form-control" id="stock"  name="stock"aria-describedby="stock" value="{{ $producto->stock }}">
                    </div>
                </div>
            </div>



            <div class="mb-3">
                <label class="col-md-4 control-label">cantidad Vendida </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="number" class="form-control" id="cantidadVendida"  name="cantidadVendida"aria-describedby="cantidadVendida" value="{{ $producto->cantidadVendida }}">
                    </div>
                </div>
            </div>





            <div class="mb-3">
                <label class="col-md-4 control-label">cantidad Baja </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="number" class="form-control" id="cantidadBaja"  name="cantidadBaja"  aria-describedby="cantidadBaja" value="{{ $producto->cantidadBaja }}">
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label class="col-md-4 control-label">Cantidad minima </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="number" class="form-control" id="cantidadMinima"  name="cantidadMinima"  aria-describedby="cantidadBaja" value="{{ $producto->cantidadMinima }}">
                    </div>
                </div>
            </div>



    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Categorias</label>
        <div class="col-d-4 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="categoriasId" class="form-control selectpicker" id="categoriasId">
                    <option value="">Seleccione...</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" @if  ($producto->categoriasId == $categoria->id)
                            selected
                    @endif>
                    {{ $categoria->nombreCategoria }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
      </div>
            <div>
                <button type="submit" class="btn btn-primary my-2"> Guardar </button>
            </div>
    </form>



@endsection


