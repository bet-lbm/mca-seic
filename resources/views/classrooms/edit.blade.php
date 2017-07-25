@extends('layouts.container')
@section('head')
Editar aula
@endsection
@section('body')
    @include('classrooms._form',['classroom' => $classroom])
@endsection