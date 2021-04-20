@extends('master')

@section("title","Listado de clientes")

@section("content")
<table class="table table-striped">
    <tr>
        <th>Nombre Completo</th><th>Número de Telefono</th>
    </tr>

    @foreach ($clients as $client)
        <tr>
            <td>{{$client->nombreCompleto}}</td><td>{{$client->numTelefono}}</td>
            <th><a href="{{ action('ClientController@formularioModificarClients', [$client->id])}}">Modificar</a></th>
        </tr>
    @endforeach
</table>


@endsection