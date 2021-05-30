@extends("master")

@section("content")

@auth
@if(Auth::user()->role != "Client")

<form enctype="multipart/form-data" action="{{action('TrainerController@modifyTrainer',['id'=>$trainer->id])}}" method="POST">
@csrf
<div class="form-group">
<label for="nombreCompleto">Nombre Completo</label>
{{-- Error messages --}}
@if($errors->has('nombreCompleto'))
<ul>
@foreach($errors->get('nombreCompleto') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" value="{{$trainer->nombreCompleto}}" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre del entrenador" required>
<small class="form-text text-muted">Recuerda introducir el nombre completo</small>
</div>
<br>
<div class="form-group">
<label for="Direccion">Direccion</label>
{{-- Error messages --}}
@if($errors->has('direccion'))
<ul>
@foreach($errors->get('direccion') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" Value="{{$trainer->direccion}}" name="direccion" id="direccion" placeholder="Dirección completa" required>
</div>
<br>
<div class="form-group">
<label for="NumCuenta">Número de cuenta</label>
{{-- Error messages --}}
@if($errors->has('numCuenta'))
<ul>
@foreach($errors->get('numCuenta') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" Value="{{$trainer->numCuenta}}" name="numCuenta" id="numCuenta" placeholder="" required>
</div>
<br>
<div class="form-group">
<label for="NumTelefono">Número de teléfono</label>
{{-- Error messages --}}
@if($errors->has('numTelefono'))
<ul>
@foreach($errors->get('numTelefono') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" name="numTelefono" Value="{{$trainer->numTelefono}}" id="numTelefono" placeholder="" maxlength=15 required>
</div>
<br>
<div class="form-group">
<label for="Especialidad">Especialidad</label>
{{-- Error messages --}}
@if($errors->has('especialidad'))
<ul>
@foreach($errors->get('especialidad') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" name="especialidad" Value="{{$trainer->especialidad}}" id="especialidad" placeholder="" required>
</div>
<br>
<div class="form-group">
<label for="Turno">Turno</label>
{{-- Error messages --}}
@if($errors->has('turno'))
<ul>
@foreach($errors->get('turno') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" name="turno" Value="{{$trainer->turno}}" id="turno" placeholder="" required>
</div>

<p><input type="submit" value="Modificar Entrenador"><input type="reset" value="Borrar datos"></p>

</form>
@auth
@if(Auth::user()->role == 'Administrator')
<th><a href=/menuAdmin>Volver</a></th>
@endif
@endauth

@auth
@if(Auth::user()->role == 'Trainer')
<th><a href="{{ action('TrainerController@viewOneTrainer', [Auth::user()->trainer->id])}}">Volver</a></th>
@endif
@endauth

@endif
@endauth

@endsection
