@extends("master")

@section("content")


<form enctype="multipart/form-data" action="{{action('TrainerController@modifyTrainer',['id'=>$trainer->id])}}" method="POST">
@csrf
<div class="form-group">
<label for="nombreCompleto">Nombre Completo</label>
<input type="text" class="form-control" value="{{$trainer->nombreCompleto}}" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre del entrenador">
<small class="form-text text-muted">Recuerda introducir el nombre completo</small>
</div>
<br>
<div class="form-group">
<label for="Direccion">Direccion</label>
<input type="text" class="form-control" Value="{{$trainer->direccion}}" name="direccion" id="direccion" placeholder="Dirección completa">
</div>
<br>
<div class="form-group">
<label for="NumCuenta">Número de cuenta</label>
<input type="text" class="form-control" Value="{{$trainer->numCuenta}}" name="numCuenta" id="numCuenta" placeholder="">
</div>
<br>
<div class="form-group">
<label for="NumTelefono">Número de teléfono</label>
<input type="text" class="form-control" name="numTelefono" Value="{{$trainer->numTelefono}}" id="numTelefono" placeholder="" maxlength=9>
</div>
<br>
<div class="form-group">
<label for="Especialidad">Especialidad</label>
<input type="text" class="form-control" name="especialidad" Value="{{$trainer->especialidad}}" id="especialidad" placeholder="">
</div>
<br>
<div class="form-group">
<label for="Turno">Turno</label>
<input type="text" class="form-control" name="turno" Value="{{$trainer->turno}}" id="turno" placeholder="">
</div>

<p><input type="submit" value="Modificar Entrenador"><input type="reset" value="Borrar datos"></p>

</form>

<th><a href=/menuAdmin>Volver</a></th>

@endsection
