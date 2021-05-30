@extends("master")

@section("content")


@auth
@if(Auth::user()->role != "Administrator")

<h3 >Solo puede acceder a esta página si está identificado como Administrador</h3>

@endif
@endauth

@auth
@if(Auth::user()->role == "Administrator")

<h1>Estadísticas : </h1>

<div class="container">

    <div class="row">

        <div class="col-6">
        <div class="panel panel-info">
        <div class="panel-heading">
        <h2>Total clases:</h2>
        </div>
        <div class="panel-body">
        {{$totalEntrenadores}}
        </div>
        </div>
        </div>

        <div class="col-6">
        <div class="panel panel-info">
        <div class="panel-heading">
        <h2>Minutos totales de clase:</h2>
        </div>
        <div class="panel-body">
        {{$minutosTotal}}
        </div>
        </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
        <div class="panel panel-info">
        <div class="panel-heading">
        <h2>Clases con nivel básico:</h2>
        </div>
        <div class="panel-body">
        {{$basico}}
        </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        <div class="panel panel-warning">
        <div class="panel-heading">
        <h2>Clases con nivel medio:</h2>
        </div>
        <div class="panel-body">
        {{$medio}}
        </div>
        </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
        <div class="panel panel-danger">
        <div class="panel-heading">
        <h2>Clases con nivel avanzado:</h2>
        </div>
        <div class="panel-body">
        {{$avanzado}}
        </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        <a href="{{ action('MiCuentaController@menuCuenta') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>
        </div>
    </div>

   
</div>

@endif
@endauth

@endsection