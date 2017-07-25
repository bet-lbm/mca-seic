@extends('layouts.container')
@section('head')
Editar Curso
@endsection
@section('body')
    @include('subjects._form',['subject' => $subject])
@endsection