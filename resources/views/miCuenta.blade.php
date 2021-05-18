@extends('master')

@section("content")
<div class="d-flex justify-content-center">
<td><a href="/menuAdmin"><button>Acceder como administrador</button></a></td>
</div>
<br>
<div class="d-flex justify-content-center">
<td><a href="{{ action('ClientController@register') }}"><button>Registrarme como usuario</button></a></td>
</div>
<br>
<div class="d-flex justify-content-center">
<td><a><button>Acceder como usuario</button></a></td>
</div>
<br>
<div class="d-flex justify-content-center">
<br><th><a href=/><button>Volver</button></a></th></br>
</div>



@endsection