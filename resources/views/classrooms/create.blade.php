@extends('layouts.container')
@section('head')
Crear nueva aula
@endsection
@section('body')
    @include('classrooms._form',['classroom' => $classroom])
@endsection