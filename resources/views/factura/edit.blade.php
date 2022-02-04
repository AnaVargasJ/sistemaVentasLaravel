@extends('layouts.layout')

@section('titulo', 'Editar factura')

@section('content')
    <h1 class="text-center my-5">Editar factura</h1>
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
    <form action="{{ route('facturas.update', $factura->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="nombrefactura" class="form-label texto my-2">
                <h4>fecha de la factura</h4>
            </label>
            <input type="text" name="nombrefactura" id="nombrefactura" value="{{ $factura->fecha }}" class="form-control">
        </div>
        <div>
        <div>
            <label for="nombrefactura" class="form-label texto my-2">
                <h4>Total de la factura</h4>
            </label>
            <input type="text" name="nombrefactura" id="nombrefactura" value="{{ $factura->fecha }}" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary my-2"> Guardar </button>
        </div>
    </form>
@endsection
