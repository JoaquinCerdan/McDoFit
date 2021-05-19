@extends("master")

@section("title","Mi cuenta")

@section("content")


<br>
<a href="{{ action('TrainingController@listTrainingsAdmin') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Administrar clases</button></a>
<br>
<br><a href="{{ action('MachineController@listMachinesAdmin') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Administrar máquinas</button></a>

<br>
<br><a href="{{ action('ClientController@listClients') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Administrar usuarios</button></a>

<br>
<br><th><a href="{{ action('TrainerController@listTrainers') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Administrar entrenadores</button></a>
<br>

<br><a href="{{ action('RoomController@listRooms') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Administrar salas</button></a>

<br><br>
<br><th><br><a href=/MiCuenta><button type="button" class="btn btn-secondary btn-lg btn-block">Volver</button></a></br></br>

@endsection