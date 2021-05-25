@extends("master")

@section("content")


<h1>Información del entrenador:</h1>


El entrenador es : {{$trainer->nombreCompleto}}
<br>
Tiene el turno de {{$trainer->turno}}
<br>

Su especialidad es :  {{$trainer->especialidad}}


@endsection