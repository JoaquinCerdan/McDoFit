@extends("master")

@section("content")

<h1>Estadísticas : </h1>

<div class="container">

    <div class="row">

        <div class="col-6">
        <div class="panel panel-info">
        <div class="panel-heading">
        <h2>Clases que se imparten hoy:</h2>
        </div>
        <div class="panel-body">
        {{$totalEntrenadores}}
        </div>
        </div>
        </div>

        <div class="col-6">
        <div class="panel panel-info">
        <div class="panel-heading">
        <h2>Minutos totales de clase hoy:</h2>
        </div>
        <div class="panel-body">
        {{$minutosTotal}}
        </div>
        </div>
        </div>

    </div>
</div>

@endsection