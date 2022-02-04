@extends('layouts.layout')

@section('titulo', 'Categorias')
@section('content')
<br><br>
    <h1 class="text-center pt-5 pb-3">Categorias</h1>
    <br><br>
    @if ($mensaje = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($query)
        <div class="alert alert-success alert-dismissible fade show">
            <p>Los resultados de la busqueda Son:</p><strong>{{ $query }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('categorias.create') }}" class="btn btn-success mb-3 float-center">Crear categoria</a>
    <br>
    <table class="table table-borderless table-hover">
        <thead id="centro">
            <tr id="centro">
                <th id="centro">Nombre categoria</th>
                <th id="centro">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td  id="centro"> {{ $categoria->nombreCategoria }} </td>
                    <td  id="centro">
                        <a  id="centro" href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info">Detalles</a>
                        <a   id="centro"href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
                        <form  id="centro" action="{{ route('categorias.destroy', $categoria->id) }}" method="post"
                            class="d-inline-flex">
                            @csrf
                            @method('DELETE')
                            <button  id="centro" type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Confirma la eliminacion de la categoria  {{ $categoria->nombreCategoria }}?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
