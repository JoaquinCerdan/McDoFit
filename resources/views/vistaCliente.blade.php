@extends("master")

@section("content")




<div class="container">

<h1>Información del Cliente:</h1>
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Nombre y apellidos</h3>
</div><div class="panel-body">
{{$cliente->nombreCompleto}}
</div>
</div>
<br>
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Direccion</h3>
</div><div class="panel-body">
{{$cliente->direccion}}
</div>
</div>
<br>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Telefono</h3>
</div><div class="panel-body">
{{$cliente->numTelefono}}
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Taquilla Actual</h3>
</div><div class="panel-body">
{{$cliente->taquillaActual}}
</div>
</div>

@auth
@if(Auth::user()->role == 'Administrator')
<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">Número de cuenta</h3>
</div><div class="panel-body">
{{$cliente->numCuenta}}
</div>
</div>
@endif
@endauth


@auth
@if(Auth::user()->role == 'Trainer' || Auth::user()->role == 'Administrator' || Auth::user()->role == 'Client')
<br><a href="{{ action('MiCuentaController@menuCuenta') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>

<br><a href="{{ action('ClientController@formularioModificarClients', [$cliente->id])}}"><button type="button" class="btn btn-warning btn-lg btn-block">Modificar</button></a>


@endif
@endauth


</div>

@endsection