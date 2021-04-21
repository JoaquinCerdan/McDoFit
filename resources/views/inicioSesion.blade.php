@extends("master")

@section("title","Mi cuenta")

@section("content")

<form>

<label for="usuario">Usuario</label>
<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre de usuario">

<label for="usuario">Contraseña</label>
<input type="text" class="form-control" name="contrasenya" id="contrasenya" placeholder="Contraseña">

<a href="{{ redirect('trainersAdmin'); }}"><button>Iniciar Sesión como administrador</button></a>

</form>

@endsection