@extends("master")

@section("content")


@if($valido == 1)
<h1>Registro creado correctamente.</h1>
<br>
<h1>¡Ya puede loggearse!</h1>
@else
<h1>Registro incorrecto.</h1>
<br>
<h1>Por favor contacte con el administrador del sitio.</h1>
@endif

@endsection