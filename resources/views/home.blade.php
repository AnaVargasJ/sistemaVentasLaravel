@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br>  <br><br><br>   <br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >

                <div class="card-header" style="background-color:rgb(37, 37, 37)">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b>{{ __('Exito! ya puedes acceder al sistema') }}</b>
                </div>

            </div>
        </div>
    </div>

</div>
<br><br>
<div class="container" style="text-align: center">
   <a href="{{ route('productos.index') }}"> <button type="submit" class="btn btn-outline-dark btn-lg">Comezar</button></a>
</div>
@endsection
