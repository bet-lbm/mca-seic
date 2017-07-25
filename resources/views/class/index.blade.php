@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CURSO</div>

                <div class="panel-body">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($classrooms as $classroom)
                            <tr>
                                <td width="20px">{{ $classroom->id }}</td>
                                <td class="text-center">{{ $classroom->num_class }}</td>
                                <td>{{ $classroom->description }}</td>
                                <td width="20px"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
            {{$classrooms->render()}}
        </div>
    </div>
</div>
@endsection