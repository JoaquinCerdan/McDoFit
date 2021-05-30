@extends("master")

@section("content")




<div class="container">

<h1>Información del Entrenador:</h1>
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Nombre y apellidos</h3>
</div><div class="panel-body">
{{$trainer->nombreCompleto}}
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Turno</h3>
</div><div class="panel-body">
{{$trainer->turno}}
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Especialidad</h3>
</div><div class="panel-body">
{{$trainer->especialidad}}
</div>
</div>

@auth
@if(Auth::user()->role == 'Client')
<h1>Contacto:</h1>
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Telefono</h3>
</div><div class="panel-body">
{{$trainer->numTelefono}}
</div>
</div>
<br><a href="{{ action('TrainingController@listTrainings') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>

@endif
@endauth


@auth
@if(Auth::user()->role == 'Administrator')
<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">Número de cuenta</h3>
</div><div class="panel-body">
{{$trainer->numCuenta}}
</div>
</div>
<br>
<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">Direccion</h3>
</div><div class="panel-body">
{{$trainer->direccion}}
</div>
</div>
<br>

@endif
@endauth


@auth
@if(Auth::user()->role == "Trainer")

<br><a href="{{ action('TrainerController@modifyTrainer',[Auth::user()->trainer->id]) }}"><button type="button" class="btn btn-warning btn-lg btn-block">Modificar</button></a>

@endif
@endauth

@auth
@if(Auth::user()->role == "Administrator")
<br><a href="{{ action('TrainerController@modifyTrainer',[$trainer->id]) }}"><button type="button" class="btn btn-warning btn-lg btn-block">Modificar</button></a>
<br><a href="{{ action('MiCuentaController@menuCuenta') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>
@endif
@endauth

@auth
@if(Auth::user()->role == "Trainer")
<br><a href="{{ action('MiCuentaController@menuCuenta') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>
@endif
@endauth

@auth
@if(Auth::user()->role == "Client")
<br><a href="{{ action('TrainingController@listTrainings') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>
@endif
@endauth

</div>

@endsection