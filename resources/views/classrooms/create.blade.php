@extends('layouts.container')
@section('head')
Crear nueva aula
@endsection
@section('body')
    @include('class._form',['classroom' => $classroom])
@endsection