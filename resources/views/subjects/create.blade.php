@extends('layouts.container')
@section('head')
Crear Nuevo Curso
@endsection
@section('body')
    @include('subjects._form',['subject' => $subject])
@endsection