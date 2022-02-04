@extends('layouts.layout')

@section('titulo', 'Editar Devolución')

@section('content')
    <h1 class="text-center my-5">Editar Venta</h1>
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

    <div class="mb-3">
        <label for="fecha" class="form-label texto my-2">
            <h4>Fecha</h4>
        </label>
        <input type="date" name="fecha" id="fecha" placeholder="fecha"
            class="form-control" value="{{ $ventas->fecha }}">
    </div>

    <form action="{{ route('ventas.update', $ventas->id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="cantidad" class="form-label texto my-2">
                <h4>Cantidad</h4>
            </label>
            <input type="text" name="cantidad" id="cantidad" placeholder="cantidad" class="form-control"
                value="{{ $ventas->cantidad }}">
        </div>

        <div class="mb-3">
            <label for="valorUnidad" class="form-label texto my-2">
                <h4>valor unidad</h4>
            </label>
            <input type="number" name="valorUnidad" id="valorUnidad" placeholder="valor Unidad del devollucion"
                class="form-control" value="{{ $ventas->valorUnidad }}">
        </div>

        <div class="mb-3">
            <label for="nombreProducto" class="form-label texto my-2">
                <h4>Producto</h4>
            </label>
            <select name="nombreProducto" class="form-select" id="nombreProducto">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}" @if ($ventas->idProducto == $producto->id)
                        selected
                @endif>
                {{ $producto->nombre }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary my-2"> Guardar </button>
        </div>
    </form>
@endsection
