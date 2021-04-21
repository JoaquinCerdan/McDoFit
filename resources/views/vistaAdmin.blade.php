@extends("master")

@section("title","Mi cuenta")

@section("content")

<a><button>Administrar clases</button></a>
<a><button>Administrar máquinas</button></a>
<a><button>Administrar usuarios</button></a>
<a href="{{ action('TrainerController@listTrainers') }}"><button>Administrar entrenadores</button></a>
<a><button>Administrar salas</button></a>

@endsection