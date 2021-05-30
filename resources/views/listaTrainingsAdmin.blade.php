@extends("master")

@section("title","Listado de Clases Training")

@section("content")

<h3 >Solo puede acceder a esta página si está identificado como Administrador</h3>

@auth
@if(Auth::user()->role == "Administrator")

<table class="table table-striped">
<tr>
    <th>Nombre</th><th>Nivel</th><th>Modificar</th><th>Borrar</th>
</tr>

@foreach ( $trainings as $training)
<tr>
        <td>{{$training->nombre}}</td><td>{{$training->nivel}}</td>
        <td><a href="{{ action('TrainingController@modifyTraining',[$training->id]) }}">Modificar</a></td>
        <td><a href="{{ action('TrainingController@deleteTraining',[$training->id]) }}">Borrar</a></td>
</tr>
@endforeach
</table>


@if(isset($sort))
        {{  $trainings->appends(['sort'=>$sort])->links() }}
@else
        {{  $trainings->links() }}
@endif


<div class="container">
  <div class="row">
    <div class="col">
    <a href="{{ action('TrainingController@addTraining') }}"><button type="button" class="btn btn-primary btn-lg">Añadir nueva clase</button></a>
    </div>
    <div class="col">
    <a href=/menuAdmin><button type="button" class="btn btn-primary btn-lg">Volver</button></a>
    </div>
  </div>
</div>

@endif
@endauth

@endsection