@extends('layouts.layout')

@section('titulo', 'Crear factura')

@section('content')
<h1 class="text-center">Crear nuevo Factura</h1>
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
<form action="{{ route('factura.store') }}" method="post">
    @method('post')
    @csrf
    <div>
        <label for="fecha" class="form-label texto my-2"><h4>Fecha de  la factura</h4></label>
        <input type="text" name="fecha" id="fecha" placeholder="fecha" class="form-control" value="{{ old('fecha') }}">
    </div>
    <div>
        <button type="submit" class="btn btn-primary my-2"> Guardar </button>
    </div>
</form>
@endsection
