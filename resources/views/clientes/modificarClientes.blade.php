@extends('master')

@section("title","Modificar cliente $client->nombreCompleto")

@section("content")

@auth
@if(Auth::user()->role == "Trainer")

<h3 >Solo puede acceder a esta página si está identificado como Administrador</h3>

@endif
@endauth

@auth
@if(Auth::user()->role != "Trainer")

<div class="content">
<form enctype="multipart/form-data" action="{{action('ClientController@modificarClients', [$client->id]) }}" method="POST">
@csrf
<div class="form-group">
<label for="nombreCompleto">Nombre Completo</label>
<input type="text" class="form-control" Value="{{$client->nombreCompleto}}" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre del cliente">
<small class="form-text text-muted">Recuerda introducir el nombre completo</small>
</div>
<br>
<div class="form-group">
<label for="taquillaActual">Taquilla Actual:</label>
<input type="text" class="form-control" Value="{{$client->taquillaActual}}" name="taquillaActual" id="taquillaActual" placeholder="">
</div>
<br>
<div class="form-group">
<label for="tiempoEmpleado">Tiempo empleado</label>
<input type="int" class="form-control" Value="{{$client->tiempoEmpleado}}"  name="tiempoEmpleado" id="tiempoEmpleado" placeholder="" >
</div>
<br>
<div class="form-group">
<label for="direccion">Dirección</label>
<input type="text" class="form-control" Value="{{$client->direccion}}"  name="direccion" id="direccion" placeholder="">
</div>
<br>
<div class="form-group">
<label for="numCuenta">Número de cuenta</label>
<input type="text" class="form-control" Value="{{$client->numCuenta}}" name="numCuenta" id="numCuenta" placeholder="">
</div>
<br>
<br>
<div class="form-group">
<label for="numTelefono">Número de teléfono</label>
<input type="int" class="form-control" Value="{{$client->numTelefono}}" name="numTelefono" id="numTelefono" placeholder="">
</div>
<br>
<br>
<div class="form-group">
<label for="fechaAlta">Fecha de Alta</label>
<input type="date" class="form-control" Value="{{$client->fechaAlta}}" name="fechaAlta" id="fechaAlta" placeholder="">
</div>
<br>

<p><input type="submit" value="Modificar"><input type="reset" value="Borrar datos"></p>

</form>

<th><a href="{{ action('ClientController@viewOneClient', [Auth::user()->client->id])}}">Volver</a></th>

<div>


@endif
@endauth

@endsection

