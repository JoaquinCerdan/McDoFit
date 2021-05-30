@extends('master')

@section("content")
<div class="container">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">¡Enhorabuena!</h4>
  <p>Te has apuntado a esta clase.</p>
  <p>Recuerda no llegar tarde y seguir las instrucciones de tu monitor/entrenador.</p>
  <hr>
  <p class="mb-0">¡Y no olvides llevar la toalla!</p>
</div>
</div>

<br><a href="{{ action('TrainingController@listTrainings') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Volver</button></a>


@endsection