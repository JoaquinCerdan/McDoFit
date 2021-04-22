@extends("master")

@section("content")


<form enctype="multipart/form-data" action="{{action('TrainingController@modifyTraining',['id'=>$training->id])}}" method="POST">
@csrf
<div class="form-group">
<label for="nombre">Nombre</label>
<input type="text" class="form-control" Value="{{$training->nombre}}" name="nombre" id="nombre" placeholder="Nombre de la clase">
<small class="form-text text-muted">Recuerda introducir el nombre completo</small>
</div>
<br>
<div class="form-group">
<label for="Horario">Horario</label>
<input type="date" class="form-control" Value="{{$training->horario}}" name="horario" id="horario" placeholder="">
</div>
<br>
<div class="form-group">
<label for="Capacidad">Capacidad</label>
<input type="int" class="form-control" Value="{{$training->capacidad}}"  name="capacidad" id="capacidad" placeholder="" maxlength=3>
</div>
<br>
<div class="form-group">
<label for="Duracion">Duración</label>
<input type="int" class="form-control" Value="{{$training->duracion}}"  name="duracion" id="duracion" placeholder="">
</div>
<br>
<div class="form-group">
<label for="Nivel">Nivel</label>
<input type="int" class="form-control" Value="{{$training->nivel}}"  name="nivel" id="nivel" placeholder="">
</div>
<br>
<!--
<div class="form-group">
    <label for="trainer_id">Elige un entrenador:</label>
    <select id="trainer_id" name="trainer_id" form="trainer_form">
    @foreach ( $trainers as $trainer)
        @if($training->trainer_id == $trainer->id)
            <option selected="selected" value="{{$trainer->id}}">{{$trainer->nombreCompleto}}</option>
        @else
            <option value="{{$trainer->id}}">{{$trainer->nombreCompleto}}</option>
        @endif

    @endforeach
    </select>
</div>
<br>
-->
<p><input type="submit" value="Modificar Clase"><input type="reset" value="Borrar datos"></p>

</form>


@endsection