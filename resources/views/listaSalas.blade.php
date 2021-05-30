@extends("master")

@section("title","Listado de Salas")

@section("content")
<h1>Ordenar por:</h1><br>
<table class="table table-striped">
<tr>
    <th><a href="{{ action('RoomController@listRooms',['sort'=>'nombre'])}}">Nombre</a></th>
    <th><a href="{{ action('RoomController@listRooms',['sort'=>'capacidad'])}}">Capacidad</a></th>
</tr></table>

<table class="table table-striped">
<tr>
    <th>Nombre</th><th>Capacidad</th><th>Borrar</th>
</tr>

@foreach ( $rooms as $room)
<tr>
    <td>{{$room->nombre}}</td><td>{{$room->capacidad}}</td>
    <td><a href="{{ action('RoomController@deleteRoom',[$room->id]) }}">Borrar</a></td>
</tr>
@endforeach
</table>


@if(isset($sort))
        {{  $rooms->appends(['sort'=>$sort])->links() }}
@else
        {{  $rooms->links() }}
@endif
<th><a href=/MiCuenta>Volver</a></th>

@endsection