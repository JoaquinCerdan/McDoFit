@extends("master")

@section("title","Listado de Clases Training")

@section("content")

<table class="table table-striped">
<tr>
    <th>Nombre</th><th>Nivel</th><th>Horario</th><th>Lugar</th><th>Entrenador</th>
    @auth
@if(Auth::user()->role == 'Client')
    <th>Apuntarse</th>
    @endif
@endauth

</tr>

@foreach ( $trainings as $training)
<tr>
<td>{{$training->nombre}}</td><td>{{$training->nivel}}</td> <td> {{$training->horario}}
<td><a href="{{ action('RoomController@viewOneRoom',[$training->room_id])}}"><button  class="btn btn-primary">{{$training->room->nombre}}</button></a></td><td><a href="{{ action('TrainerController@viewOneTrainer',[$training->trainer_id])}}"><button  class="btn btn-primary" >{{$training->trainer->nombreCompleto}}</button></a></td>

@auth
@if(Auth::user()->role == 'Client')
<td><a href="{{ action('ClientController@apuntarseAUnaClase',[$training->id,Auth::user()->client->id])}}"><button class="btn btn-primary">Apuntarse</button></a></td>
@endif
@endauth

</tr>
@endforeach
</table>


<th><a href=/>Volver</a></th>
@include('footer')
@endsection