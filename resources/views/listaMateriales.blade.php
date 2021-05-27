@extends("master")

@section("title","Listado de Materiales")

@section("content")



<table class="table table-striped">
    <tr>
        <th>Nombre</th><th>Disponibilidad</th><th></th>
    </tr>

    @foreach ( $materiales as $material)
    <tr>
        <td>
            {{$material->nombre}}
        </td>
        <td>
            @if ($material->client_id == NULL)
                Disponible
            @else
                No Disponible
            @endif
        </td>
        @auth
            @if(Auth::user()->role == 'Client')
                <td>
                    @if ($material->client_id == NULL)
                        <a href="{{ action('MaterialController@alquilarMaterial', [Auth::user()->client_id, $material]) }}">
                            <button class="btn btn-primary"> 
                                Alquilar
                            </button>
                        </a>
                    @else
                        <button class="btn btn-primary" disabled> 
                            Alquilar
                        </button>
                    @endif
                </td>
            @endif
        @endauth
    </tr>
    @endforeach
</table>

<th><a href=/>Volver</a></th>
@include('footer')
@endsection