@extends('layouts.container')
@section('head')
Editar aula
@endsection
@section('body')
    @include('class._form',['classroom' => $classroom])
@endsection