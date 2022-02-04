@extends('layouts.layout')

@section('titulo', 'detalles de la Categoria')

@section('content')
    <br><br><br><br>




        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="" id="centro">
                    <div class="" id="centro"><h3><b>Detalles de la categoria</b></h3></div>

                    <div class="card-body" >
                        <table class="table table-borderless table-hover" style="text-align: center; width:50%; margin:auto;" >
                            <thead class="table ">
                                <tr>
                                    <th><h5>{{ $categoria->nombreCategoria }}</h5></th>
                                </tr>
                                <br>
                            </thead>
                        </table>
                        <br><br><br>
                        <a href="{{ route('categorias.index') }}" style="margin: auto" class="btn btn-info " >Volver</a>

    @endsection:</h3>
