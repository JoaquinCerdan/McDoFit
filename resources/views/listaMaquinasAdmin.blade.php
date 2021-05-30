@extends("master")

@section("title","Listado de Máquinas")

@section("content")

@auth
@if(Auth::user()->role != "Administrator")

<h3 >Solo puede acceder a esta página si está identificado como Administrador</h3>

@endif
@endauth

@auth
@if(Auth::user()->role == "Administrator")

<h1>Ordenar por:</h1><br>
<table class="table table-striped">
<tr>
    <th><a href="{{ action('MachineController@listMachinesAdmin',['sort'=>'nombre'])}}">Nombre</a></th>
    <th><a href="{{ action('MachineController@listMachinesAdmin',['sort'=>'vecesUtilizada'])}}">Menos veces utilizada</a></th>
</tr></table>

<table class="table table-striped">
<tr>
    <th>Nombre</th><th>Veces utilizada</th><th>Borrar</th>
</tr>

@foreach ( $machines as $machine)
<tr>
    <td>{{$machine->nombre}}</td><td>{{$machine->vecesUtilizada}}</td>
    <td><a href="{{ action('MachineController@deleteMachine',[$machine->id]) }}"><button  class="btn btn-primary" > Borrar</button></a></td>
</tr>
@endforeach
</table>


@if(isset($sort))
        {{  $machines->appends(['sort'=>$sort])->links() }}
@else
        {{  $machines->links() }}
@endif

<th><a href=/MiCuenta>Volver</a></th>

@endif
@endauth

@endsection