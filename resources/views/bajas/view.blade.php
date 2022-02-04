
@extends('layouts.layout')

@section('titulo', 'Bajas')
@section('content')




<br><br><br><br><br>
    <div class="row justify-content-center " >
        <div class="col-md-6" >
            <div class="" id="centro">
                <div class=""  id="centro"><h3><b>Detalles de la baja</b></h3></div>

                <div class="card-body">
                    <table class="table table-borderless table-hover " style="text-align: center; ">
                        <thead >
                        </tr>
                        <tr>
                            <th><b>Nombre producto :</b>{{  $baja->nombre }}<br></th>
                        </tr>
                            <tr>
                                <th><b>Cantidad :</b>{{  $baja->cantidad}}<br></th>
                            </tr>

                        <tr>
                            <th><b>Precio :</b>{{  $baja->valorUnidad }}<br></th>
                        </tr>
                        <tr>
                            <th><b>Fecha: </b>{{  $baja->fecha }}<br></th>

                        <tr>
                            <th><b>Descripcion :</b>{{  $baja->descripcion }}<br></th>
                        </tr>

                    </thead>
                    </table>

                    <a href="{{ route('bajas.index') }}" style="margin: auto" class="btn btn-success " >Volver</a>

                  <br>
@endsection
