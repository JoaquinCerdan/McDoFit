@extends('master')

@section("content")
<div class="d-flex justify-content-center">
<td><a href="/menuAdmin"><button  class="btn btn-primary">Acceder como administrador</button></a></td>
</div>
<br>
<div class="d-flex justify-content-center">
<td><a href="{{ action('ClientController@register') }}"><button  class="btn btn-primary">Registrarme como usuario</button></a></td>
</div>
<br>
<div class="d-flex justify-content-center">
<td><a><button  class="btn btn-primary">Acceder como usuario</button></a></td>
</div>
<br>
<div class="d-flex justify-content-center">
<br><th><a href=/><button  class="btn btn-primary">Volver</button></a></th></br>
</div>



@endsection