@extends('master')

@section("title","Modificar cliente $client->nombreCompleto")

@section("content")
<form action="{{action('ClientController@modificarClients', [$client->id]) }}" method = "post">
    @csrf
    <p>Nombre Completo: <input name = "nombreCompleto" id="nombreCompleto" type = "text" value = "{{$client->nombreCompleto}}" /> </p>
    <p>Taquilla Actual: <input name = "taquillaActual" id="taquillaActual" type = "text" value = "{{$client->taquillaActual}}" /> </p>
    <p>Tiempo empleado: <input name = "tiempoEmpleado" id="tiempoEmpleado" type = "int" value = "{{$client->tiempoEmpleado}}" /> </p>
    <p>Dirección: <input name = "direccion" id = "direccion" type = "text" value = "{{$client->direccion}}" /> </p>
    <p>Número de cuenta: <input name = "numCuenta" id = "numCuenta" type = "text" value = "{{$client->numCuenta}}" /> </p>
    <p>Número de teléfono: <input name = "numTelefono" id = "numTelefono" type = "int" value = "{{$client->numTelefono}}" /> </p>
    <p>Fecha de Alta: <input name = "fechaAlta" id = "fechaAlta" type = "date" value = "{{$client->fechaAlta}}" /> </p>

    <input type = "submit"/>
</form>


@endsection

