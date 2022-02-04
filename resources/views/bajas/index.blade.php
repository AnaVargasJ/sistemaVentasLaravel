@extends('layouts.layout')

@section('titulo', 'Bajas')
@section('content')
<br><br>
    <h1 class = "text-center pt-5 pb-3">Bajas</h1>
<br><br>
    @if($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($query)
    <div class="alert alert-success alert-dismissible fade show">
        <p>Los resultadOs de la busqueda <strong>{{ $query }} </strong> Son:</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <a href="{{ route('bajas.create') }}" class="btn btn-success mb-3 float-center">Crear Baja</a>
<br>
    <table class="table table-borderless table-hover">
        <thead id="centro">
            <tr id="centro">
                <th id="centro">cantidad</th>
                <th id="centro">fecha</th>
                <th id="centro">nombre</th>
                <th id="centro">descripcion</th>
                <th id="centro">acciones</th>
            </tr>
        </thead>
        <tbody id="centro">
            @foreach ($bajas as $baja)
                <tr id="centro">
                    <td id="centro"> {{ $baja->cantidad }} </td>
                    <td id="centro"> {{ $baja->fecha }} </td>
                    <td id="centro"> {{ $baja->nombre }} </td>
                    <td id="centro"> {{ $baja->descripcion }} </td>
                    <td id="centro">
                        <a  id="centro" href="{{ route('bajas.show', $baja->id) }}" class="btn btn-info">Detalles</a>
                        <a id="centro" href="{{ route('bajas.edit', $baja->id) }}" class="btn btn-warning">Editar</a>
                        <form id="centro" action="{{ route('bajas.destroy', $baja->id) }}" method="post" class="d-inline-flex">
                            @csrf
                            @method('DELETE')
                            <button id="centro" type="submit" class="btn btn-danger" onclick="return confirm('¿Confirma la eliminacion de la Baja  {{ $baja->cantidad }}?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
