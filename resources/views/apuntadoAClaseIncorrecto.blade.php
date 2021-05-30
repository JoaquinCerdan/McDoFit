@extends('master')

@section("content")
<div class="container">
<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">¡No te puedes apuntar, ya lo estás!</h4>
  <p>Ya estás apuntado a esta clase.</p>
  <p>Este sistema está hecho para que hayan más huecos en clase..¡Lo sentimos!</p>
  <hr>
  <p class="mb-0">¡Para reclamaciones, por favor, contacta con nuestro personal!</p>
</div>
</div>

<br><a href="{{ action('TrainingController@listTrainings') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>
@endsection