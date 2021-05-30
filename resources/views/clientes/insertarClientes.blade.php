@extends('master')

@auth
@if(Auth::user()->role != "Administrator")

<h3 >Solo puede acceder a esta página si está identificado como Administrador</h3>

@endif
@endauth

@auth
@if(Auth::user()->role == "Administrator")

@section("content")
<form action="{{action('ClientController@add')}}" method="POST">
    @csrf
    <p>Nombre Completo: <input name = "nombreCompleto" id="nombreCompleto" type = "text" value = "{{old('nombreCompleto')}}" /> </p>
    <p>Taquilla Actual: <input name = "taquillaActual" id="taquillaActual" type = "text" value = "{{old('taquillaActual')}}" /> </p>
    <p>Dirección: <input name = "direccion" id = "direccion" type = "text" value = "{{old('direccion')}}" /> </p>
    <p>Número de cuenta: <input name = "numCuenta" id = "numCuenta" type = "text" value = "{{old('numCuenta')}}" /> </p>
    <p>Número de teléfono: <input name = "numTelefono" id = "numTelefono" type = "int" value = "{{old('numTelefono')}}" /> </p>
    <p>Fecha de Alta: <input name = "fechaAlta" id = "fechaAlta" type = "date" value = "{{old('fechaAlta')}}" /> </p>   

    <input type = "submit"/>
</form>

<th><a href="{{ action('ClientController@listClients')}}">Volver</a></th>
@endsection

@endif
@endauth