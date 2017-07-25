@extends('layouts.container')
@section('head')
Detalle de aula
@endsection
@section('body')
	<h4>Número de aula: {{ $subject->name_subject }}</h4>
	<p>Descripción {{ $subject->hours }}</p>
	<p>Descripción {{ $subject->max_students }}</p>

@endsection
@section('extra')
<div class="panel-footer">
	<a href="{{ route('subjects_path') }}">Regresar</a>
</div>
@endsection