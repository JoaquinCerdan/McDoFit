@extends("master")

@section("title","Listado de clientes")

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
    <th><a href="{{ action('ClientController@listClients',['sort'=>'nombreCompleto'])}}">Nombre</a></th>
    <th></th>
    <th><a href="{{ action('ClientController@listClients',['sort'=>'numTelefono'])}}">Número de Telefono</a></th>
    <th></th>

</tr></table>

<table class="table table-striped">
    <tr>
        <th>Nombre Completo</th><th>Número de Telefono</th><th></th><th></th>
    </tr>
</table>
<table class="table table-striped">
    @foreach ($clients as $client)
        <tr>
            <td>{{$client->nombreCompleto}}</td><td>{{$client->numTelefono}}</td>
            <th><a href="{{ action('ClientController@formularioModificarClients', [$client->id])}}">Modificar</a></th>
            <th><a href="{{ action('ClientController@borrarClients', [$client->id])}}">Borrar</a></th>
            <th><a href="{{ action('ClientController@viewOneClient', [$client->id])}}">Ver</a></th>
        </tr>
    @endforeach
</table>

@if(isset($sort))
    {{  $clients->appends(['sort'=>$sort])->links() }}
@else
    {{  $clients->links() }}
@endif


<a href="{{ action('ClientController@addCliente') }}"><button type="button" class="btn btn-primary btn-lg">Añadir nuevo usuario</button></a>
<th><a href=/MiCuenta>Volver</a></th>

@endif
@endauth

@endsection

