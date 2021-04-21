@extends("master")

@section("title","Listado de Clases Training")

@section("content")

<table class="table table-striped">
<tr>
    <th>Nombre</th><th>Nivel</th>
</tr>

@foreach ( $trainings as $training)
<tr>
<td>{{$training->nombre}}</td><td>{{$training->nivel}}</td>
</tr>
@endforeach
</table>


@if(isset($sort))
        {{  $trainings->appends(['sort'=>$sort])->links() }}
@else
        {{  $trainings->links() }}
@endif

@endsection