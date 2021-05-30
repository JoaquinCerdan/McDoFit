@extends("master")

@section("content")

@auth
@if(Auth::user()->role != "Administrator")

<h3 >Solo puede acceder a esta página si está identificado como Administrador</h3>

@endif
@endauth

@auth
@if(Auth::user()->role == "Administrator")

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
<form class="form-horizontal"enctype="multipart/form-data" action="{{action('TrainerController@insertTrainer')}}" method="POST">
@csrf
<div class="form-group">
<div class="col-md-8">
<label for="nombreCompleto">Nombre Completo</label>
<input type="text" class="form-control" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre del entrenador">
<small class="form-text text-muted">Recuerda introducir el nombre completo</small>
</div>
</div>
<br>
<div class="form-group">
<div class="col-md-8">
<label for="Direccion">Direccion</label>
{{-- Error messages --}}
@if($errors->has('direccion'))
<ul>
@foreach($errors->get('direccion') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección completa">
</div>
</div>
<br>



<div class="form-group">
<div class="col-md-8">
<label for="NumCuenta">Número de cuenta</label>
{{-- Error messages --}}
@if($errors->has('numCuenta'))
<ul>
@foreach($errors->get('numCuenta') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" name="numCuenta" id="numCuenta" placeholder="">
</div>
</div>
<br>



<div class="form-group">
<div class="col-md-8">
<label for="NumTelefono">Número de teléfono</label>
{{-- Error messages --}}
@if($errors->has('numTelefono'))
<ul>
@foreach($errors->get('numTelefono') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" name="numTelefono" id="numTelefono" placeholder="">
</div>
</div>
<br>


<div class="form-group">
<div class="col-md-8">
<label for="Especialidad">Especialidad</label>

{{-- Error messages --}}
@if($errors->has('especialidad'))
<ul>
@foreach($errors->get('especialidad') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" name="especialidad" id="especialidad" placeholder="">
</div>
</div>
<br>


<div class="form-group">
<div class="col-md-8">
<label for="Turno">Turno</label>
{{-- Error messages --}}
@if($errors->has('turno'))
<ul>
@foreach($errors->get('turno') as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<input type="text" class="form-control" name="turno" id="turno" placeholder="">
</div>
</div>
<p><input type="submit" class="btn btn-primary" value="Crear nuevo Entrenador"><input type="reset" class="btn btn-primary" value="Borrar datos"></p>
</form>
</div>
</div>
</div>
</div>

<th><a href="/trainersAdmin">Volver</a></th>

@endif
@endauth

@endsection