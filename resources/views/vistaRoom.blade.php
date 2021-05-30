@extends("master")

@section("content")




<div class="container">

<h1>Información de la sala:</h1>
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Nombre</h3>
</div><div class="panel-body">
{{$room->nombre}}
</div>
</div>
<br>
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Metros Cuadrados</h3>
</div><div class="panel-body">
{{$room->metrosCuadrados}}
</div>
</div>
<br>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Planta</h3>
</div><div class="panel-body">
{{$room->planta}}
</div>
</div>



<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Capacidad</h3>
</div><div class="panel-body">
{{$room->capacidad}}
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Especialidad</h3>
</div><div class="panel-body">
{{$room->especialidad}}
</div>
</div>

<br><a href="{{ action('TrainingController@listTrainings') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>



</div>

@endsection