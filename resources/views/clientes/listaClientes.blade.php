@extends("master")

@section("title","Listado de clientes")

@section("content")
<h1>Ordenar por:</h1><br>
<table class="table table-striped">
<tr>
    <th><a href="{{ action('ClientController@listClients',['sort'=>'nombreCompleto'])}}">Nombre</a></th>
    <th><a href="{{ action('ClientController@listClients',['sort'=>'numTelefono'])}}">Número de Telefono</a></th>
</tr></table>

<table class="table table-striped">
    <tr>
        <th>Nombre Completo</th><th>Número de Telefono</th>
    </tr>
</table>
<table class="table table-striped">
    @foreach ($clients as $client)
        <tr>
            <td>{{$client->nombreCompleto}}</td><td>{{$client->numTelefono}}</td>
            <th><a href="{{ action('ClientController@formularioModificarClients', [$client->id])}}">Modificar</a></th>
            <th><a href="{{ action('ClientController@borrarClients', [$client->id])}}">Borrar</a></th>
        </tr>
    @endforeach
</table>

@if(isset($sort))
    {{  $clients->appends(['sort'=>$sort])->links() }}
@else
    {{  $clients->links() }}
@endif


<a href="{{ action('ClientController@addCliente') }}"><button type="button" class="btn btn-primary btn-lg">Añadir nuevo usuario</button></a>
<th><a href=/menuAdmin>Volver</a></th>
@endsection

