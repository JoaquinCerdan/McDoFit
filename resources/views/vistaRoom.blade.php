@extends("master")

@section("content")


<h1>Información de la sala:</h1>


El nombre de la sala es : {{$room->nombre}}
<br>
Tiene {{$room->metrosCuadrados}} metros cuadrados.
<br>

Además cuenta con una capacidad de {{$room->capacidad}} personas.


@endsection