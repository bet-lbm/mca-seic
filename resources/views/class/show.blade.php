@extends('layouts.container')
@section('head')
Detalle de aula
@endsection
@section('body')
	<h4>Número de aula: {{ $classroom->num_class }}</h4>
	<p>Descripción {{ $classroom->description }}</p>

@endsection
@section('extra')
<div class="panel-footer">
	<a href="{{ route('classrooms_path') }}">Regresar</a>
</div>
@endsection