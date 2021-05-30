@extends("master")

@section("title","Listado de Entrenadores")

@section("content")

<table class="table table-striped">
<tr>
    <th>Nombre</th><th>Teléfono</th><th>Modificar</th><th>Borrar</th><th>Ver</th>
</tr>

@foreach ( $trainers as $trainer)
<tr>
<td>{{$trainer->nombreCompleto}}</td><td>{{$trainer->numTelefono}}</td><td><a href="{{ action('TrainerController@modifyTrainer',[$trainer->id]) }}">Modificar</a></td>
<td><a href="{{ action('TrainerController@deleteTrainer',[$trainer->id]) }}">Borrar</a></td>
<th><a href="{{ action('TrainerController@viewOneTrainer', [$trainer->id])}}">Ver</a></th>


</tr>
@endforeach
</table>


@if(isset($sort))
        {{  $trainers->appends(['sort'=>$sort])->links() }}
@else
        {{  $trainers->links() }}
@endif


<a href="{{ action('TrainerController@addTrainer') }}"><button type="button" class="btn btn-primary btn-lg">Añadir nuevo entrenador</button></a>
<th><a href=/MiCuenta>Volver</a></th>
@endsection