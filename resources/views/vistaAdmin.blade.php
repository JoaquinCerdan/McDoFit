@extends("master")

@section("title","Mi cuenta")

@section("content")

<a href="{{ action('TrainingController@listTrainingsAdmin') }}"><button>Administrar clases</button></a>
<a href="{{ action('MachineController@listMachinesAdmin') }}"><button>Administrar máquinas</button></a>
<a href="{{ action('ClientController@listClients') }}"><button>Administrar usuarios</button></a>
<a href="{{ action('TrainerController@listTrainers') }}"><button>Administrar entrenadores</button></a>
<a href="{{ action('RoomController@listRooms') }}"><button>Administrar salas</button></a>

@endsection