@extends('layouts.container')
@section('head')
Crear nuevo curso
@endsection
@section('body')
    @include('subjects._form',['subject' => $subject])
@endsection