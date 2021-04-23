@extends("master")

@section("content")

<h1>¡Has {{$accion}} correctamente!</h1>

<a href="{{ action('MiCuentaController@menuAdmin') }}"><button type="button" class="btn btn-primary btn-lg">Volver</button></a>


@endsection