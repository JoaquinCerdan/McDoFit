@extends("master")

@section("title","Listado de Clases Training")

@section("content")

@foreach ( $trainings as $training)

{{$training->nombre}} <br/>

@endforeach

@endsection