@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Curso</div>
                
                <div class="panel-body">
                    @include('layouts._messages')
                    <p>
                    </p>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th class="text-center">Nombre Curso</th>
                                <th whidth="30px">Horas</th>
                                <th whidth="20px">maximo</th>
                                <th whidth="40px"></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($subjects as $subject)
                                <tr>
                                    <td width="20px">{{$subject->id}}</td>
                                    <td class="text-center">{{$subject->name_subject}}</td>
                                    <td width="30px" class="text-center">{{$subject->hours}}</td>
                                    <td width="20px" class="text-center">{{$subject->max_students}}</td>
                                    <td width="20px"><a class="btn btn-primary" href="{{ route('edit_subject_path', ['subject'=>$subject->id]) }}">Editar</a></td>
                                    <td width="40px" class="text-center">
                                        <form action="{{ route('delete_subject_path', ['subject'=>$subject->id]) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{$subjects->render()}}
        </div>
    </div>
</div>
@endsection