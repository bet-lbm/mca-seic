@extends('layouts.container')
@section('head')
Lista de aulas
@endsection
@section('body')
<p>
{{ $classrooms->total() }} registros | página {{ $classrooms->currentPage() }} de {{ $classrooms->lastPage() }}
</p>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th width="20px">ID</th>
            <th>Clase #</th>
            <th>Descripción</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classrooms as $classroom)
        <tr>
            <td width="20px">{{ $classroom->id }}</td>
            <td class="text-center">{{ $classroom->num_class }}</td>
            <td>{{ $classroom->description }}</td>
            <td width="20px"><a class="btn btn-primary" href="{{ route('edit_classroom_path', ['classroom'=>$classroom->id]) }}">Editar</a></td>
            <td width="20px">
                <form action="{{ route('delete_classroom_path', ['classroom'=>$classroom->id]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@section('extra')
{{$classrooms->render()}}
@endsection