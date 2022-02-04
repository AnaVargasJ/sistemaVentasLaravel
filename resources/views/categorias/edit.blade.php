@extends('layouts.layout')

@section('titulo','Editar categoria')

@section('content')
<h1 class="text-center my-5">Editar categoria</h1>
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
    <form action="{{ route('categorias.update',$categoria->id) }}" method="post">
        @method('put')
        @csrf
        {{-- <div class="mb-3">
          <label for="nombreCategoria" class="form-label">Nombre de la categoria</label>
          <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" aria-describedby="nombreCategoria" value="{{ $categoria->nombreCategoria }}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary my-2"> Guardar </button>
        </div> --}}

        <div class="row"  >
            <div class="col" >
                <label for="nombreCategoria" class="form-label"><h3>Edite la categoria</h3></label>
                <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" aria-describedby="nombreCategoria" value="{{ $categoria->nombreCategoria }}">

                    <br>
                    <button type="submit" class="btn btn-success my-2"> Guardar </button>
            </div>
            <div class="col">
                {{-- <button type="submit" class="btn btn-primary my-2"> Guardar </button> --}}
            </div>
        </div>
    </form>
    @endsection







