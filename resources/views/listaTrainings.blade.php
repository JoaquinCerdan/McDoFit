@extends("master")

@section("title","Listado de Clases Training")

@section("content")

<table class="table table-striped">
<tr>
    <th>Nombre</th><th>Nivel</th><th>Lugar</th><th>Entrenador</th>
</tr>

@foreach ( $trainings as $training)
<tr>
<td>{{$training->nombre}}</td><td>{{$training->nivel}}</td>
<td><a href="{{ action('RoomController@viewOneRoom',[$training->room_id])}}"><button>{{$training->room->nombre}}</button></a></td><td><a href="{{ action('TrainerController@viewOneTrainer',[$training->trainer_id])}}"><button>{{$training->trainer->nombreCompleto}}</button></a></td>
</tr>
@endforeach
</table>


@if(isset($sort))
        {{  $trainings->appends(['sort'=>$sort])->links() }}
@else
        {{  $trainings->links() }}
@endif
<th><a href=/>Volver</a></th>

@endsection