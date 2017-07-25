@extends('layouts.container')
@section('head')
Crear nueva aula
@endsection
@section('body')
    @include('subjects._form',['subject' => $subject])
@endsection