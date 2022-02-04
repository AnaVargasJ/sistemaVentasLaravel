@extends('layouts.layout')

@section('titulo', 'Crear Baja')

@section('content')
<br><br>
<h1 class="text-center">Crear nueva Baja</h1>
@if ($errors->any())

<div class ="alert alert-danger">
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
<form action="{{ route('bajas.store') }}" method="post">
    @method('post')
    @csrf
<form class="well form-horizontal" action="{{ route('bajas.store') }}" method="post" id="insert_developer">

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


     @csrf
     @method('post')
     <div class="mb-3">
         <div class="mb-3">
             <label class="col-md-4 control-label">Cantidad</label>
             <div class="col-md-4 inputGroupContainer">
                 <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input type="text" name="cantidad" id="cantidad" placeholder="cantidad de la baja" class="form-control" value="{{ old('cantidad') }}">
                 </div>
             </div>
         </div>


         <div class="mb-3">
            <div class="mb-3">
                <label class="col-md-4 control-label">Valor unidad</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="number" name="valorUnidad" id="valorUnidad" placeholder="valor Unidad" class="form-control" value="{{ old('valorUnidad') }}">

                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="mb-3">
                    <label class="col-md-4 control-label">Fecha</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="date" name="fecha" id="fecha" placeholder="fecha de la baja" class="form-control" value="{{ old('fecha') }}">

                        </div>
                    </div>
                </div>



                <div class="mb-3">
                    <div class="mb-3">
                        <label class="col-md-4 control-label">Descripcion</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="descripcion" id="descripcion" placeholder="descripcion de la baja" class="form-control" value="{{ old('cantidad') }}">

                            </div>
                        </div>
                    </div>




<div>
    <button type="submit" class="btn btn-success my-2"> Guardar </button>
</div>
</form>
@endsection
