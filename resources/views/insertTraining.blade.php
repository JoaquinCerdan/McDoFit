@extends("master")

@section("content")


<form enctype="multipart/form-data" action="{{action('TrainingController@insertTraining')}}" method="POST">
@csrf
<div class="form-group">
<label for="nombre">Nombre</label>
<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la clase">
<small class="form-text text-muted">Recuerda introducir el nombre completo</small>
</div>
<br>
<div class="form-group">
<label for="Horario">Horario</label>
<input type="date" class="form-control" name="horario" id="horario" placeholder="">
</div>
<br>
<div class="form-group">
<label for="Capacidad">Capacidad</label>
<input type="int" class="form-control" name="capacidad" id="capacidad" placeholder="" maxlength=3>
</div>
<br>
<div class="form-group">
<label for="Duracion">Duración</label>
<input type="int" class="form-control" name="duracion" id="duracion" placeholder="">
</div>
<br>
<div class="form-group">
<label for="Nivel">Nivel</label>
<input type="int" class="form-control" name="nivel" id="nivel" placeholder="">
</div>
<br>
<p><input type="submit" value="Crear nueva Clase"><input type="reset" value="Borrar datos"></p>

</form>


@endsection