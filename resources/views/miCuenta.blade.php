@extends('master')

@section("content")

@auth
@if(Auth::user()->role == 'Administrator')
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
@endif
@endauth


@auth
<br>
<div class="d-flex justify-content-center">
<td><a href=""><button  class="btn btn-primary">Modificar perfil</button></a></td>
</div>
<br>
<br>

<td><a class="d-flex justify-content-center" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a></td>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
                        
@endauth

@guest
<br>
<div class="d-flex justify-content-center">
<td><a href="/register"><button  class="btn btn-primary">Registro</button></a></td>
</div>
<br>
<br>
<div class="d-flex justify-content-center">
<td><a href="/login"><button  class="btn btn-primary">Login</button></a></td>
</div>
<br>
<br>
<div class="d-flex justify-content-center">
<br><th><a href=/><button  class="btn btn-primary">Volver</button></a></th></br>
</div>

@endguest



@endsection