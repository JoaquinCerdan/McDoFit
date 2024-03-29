@extends("master")

@section("title","Listado de Máquinas")

@section("content")
<h1>Ordenar por:</h1><br>
<table class="table table-striped">
<tr>
    <th><a href="{{ action('MachineController@listMachines',['sort'=>'nombre'])}}">Nombre</a></th>
    <th><a href="{{ action('MachineController@listMachines',['sort'=>'vecesUtilizada'])}}">Menos veces utilizada</a></th>
</tr></table>

<table class="table table-striped">
<tr>
    <th>Nombre</th><th>Veces utilizada</th><th>Sala en la que está</th>
</tr>

@foreach ( $machines as $machine)
<tr>
<td>{{$machine->nombre}}</td><td>{{$machine->vecesUtilizada}}</td>
<td><a href="{{ action('RoomController@viewOneRoom',[$machine->id])}}"><button class="btn btn-primary">{{$machine->room->nombre}}</button></a></td>

</tr>
@endforeach
</table>


@if(isset($sort))
        {{  $machines->appends(['sort'=>$sort])->links() }}
@else
        {{  $machines->links() }}
@endif

<th><a href=/>Volver</a></th>
@include('footer')
@endsection