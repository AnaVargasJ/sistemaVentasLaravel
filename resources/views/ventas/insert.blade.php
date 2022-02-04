
        @extends('layouts.layout')

        @section('titulo', 'Registrar Venta')
        @section('content')

        <br><br>
            <h1 class="text-center">Registrar nueva Venta</h1>
            @if ($errors->any())

                <div class="alert alert-danger">
                    <div class="header">
                        <strong>Upss..</strong>algo salio mal
                    </div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <br><br>
        <form class="well form-horizontal" action="{{ route('ventas.store') }}" method="post" id="insert_developer">
             @csrf
             @method('post')
             <div class="mb-3">
                 <div class="mb-3">
                     <label class="col-md-4 control-label">Fecha</label>
                     <div class="col-md-4 inputGroupContainer">
                         <div class="input-group">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                             <input name="fecha" placeholder="fecha" class="form-control" type="date"
                             value="{{ old('fecha') }}">

                         </div>
                     </div>
                 </div>


                 <div class="mb-3">
                    <div class="mb-3">
                        <label class="col-md-4 control-label">Cédula</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="cedula" placeholder="cedula" class="form-control" type="number"
                        value="{{ old('cedula') }}">

                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            <label class="col-md-4 control-label">Nombre Cliente</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="nombreCliente" placeholder="nombreCliente" class="form-control" type="text"
                        value="{{ old('nombreCliente') }}">

                                </div>
                            </div>
                        </div>
        <div>
            <button type="submit" class="btn btn-primary my-2"> Guardar </button>
        </div>
    </form>



@endsection

