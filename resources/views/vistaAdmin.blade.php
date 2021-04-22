@extends("master")

@section("title","Mi cuenta")

@section("content")

<a href="{{ action('TrainingController@listTrainingsAdmin') }}"><button>Administrar clases</button></a>
<a><button>Administrar máquinas</button></a>
<a href="{{ action('ClientController@listClients') }}"><button>Administrar usuarios</button></a>
<a href="{{ action('TrainerController@listTrainers') }}"><button>Administrar entrenadores</button></a>
<a><button>Administrar salas</button></a>

@endsection