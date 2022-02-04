@extends('layouts.layout')

@section('titulo', 'Registrar producto')
@section('content')

<br><br>
    <h1 class="text-center">Registrar nuevo Producto</h1>
    @if ($errors->any())

        <div class="alert alert-danger">
            <div class="header">
                <strong>Upss..</strong>algo salio mal
            </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br><br>
   <form class="well form-horizontal" action="{{ route('productos.store') }}" method="post" id="insert_developer">
        @csrf
        @method('post')
        <div class="mb-3">
            <div class="mb-3">
                <label class="col-md-4 control-label">Nombre</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="nombre" placeholder="Nombre" class="form-control" type="text"
                            value="{{ old('nombre') }}">

                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label class="col-md-4 control-label">Marca</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="marca" placeholder="marca" class="form-control" type="text"
                            value="{{ old('marca') }}">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="col-md-4 control-label">valor Unidad #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="valorUnidad" placeholder="valorUnidad" class="form-control" type="number"
                            value="{{ old('valorUnidad') }}">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="col-md-4 control-label">stock</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="stock" placeholder="stock" class="form-control" type="number"
                            value="{{ old('stock') }}">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="col-md-4 control-label">Cantidad Minima</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="cantidadMinima" placeholder="cantidadMinima" class="form-control" type="number"
                            value="{{ old('cantidadMinima') }}">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="col-md-4 control-label">cantidad Vendida</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="cantidadVendida" placeholder="cantidadVendida" class="form-control" type="number"
                            value="{{ old('cantidadVendida') }}">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="col-md-4 control-label">cantidad Baja</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="cantidadBaja" placeholder="cantidadBaja" class="form-control" type="number"
                            value="{{ old('cantidadBaja') }}">
                    </div>
                </div>
            </div>

            {{-- <div class="mb-3">
                <label class="col-md-4 control-label">Categoria</label>
                <div class="col-d-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="categoriasId" class="form-control selectpicker">
                            <option value="">Seleccione...</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" @if (old('categoriasId') == $categoria->id)
                                    selected
                            @endif>
                            {{ $categoria->nombreCategoria }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div> --}}
                {{-- <div>
                    <button type="submit" class="btn btn-primary my-2"> Guardar </button>
                </div> --}}
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Categorias</label>
                    <div class="col-d-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="categoriasId" class="form-control selectpicker">
                                <option value="">Seleccione...</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" @if (old('categoriasId') == $categoria->id)
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
        </div>
    </form>





@endsection
