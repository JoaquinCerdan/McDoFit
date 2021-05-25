@extends('master')

@section("content")

@auth
<br>
<div class="d-flex justify-content-center">
<td><a href=""><button  class="btn btn-primary">Modificar perfil</button></a></td>
</div>
<br>
<br>
<div class="d-flex justify-content-center">
<td><a href=""><button  class="btn btn-primary">Cerrar sesión</button></a></td>
</div>
<br>
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