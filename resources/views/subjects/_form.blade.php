@if($subject->exists)
	<form action="{{ route('update_subject_path',['subject'=>$subject->id]) }}" method="POST">
	{{ method_field('PUT') }}
@else
	<form class="form-horizontal" method="POST" action="{{ route('store_subject_path') }}">
@endif
	{{ csrf_field() }}

	<div class="form-group">
        <label for="num_class" class="col-md-4 control-label">Nombre del Curso</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="num_class" value="{{ $subject->name_subject or old('name_subject') }}" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-4 control-label">hora de duracion</label>

        <div class="col-md-6">
            <input type="number" class="form-control" name="description" value="{{ $subject->hours or old('hours') }}" required>

        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-4 control-label">numero max de estudiantes</label>

        <div class="col-md-6">
            <input type="number" class="form-control" name="description" value="{{ $subject->max_students or old('students') }}" required>

        </div>
    </div>


    <div class="form-group">
        @if($subject->exists)

        <div class="form-group">
            <button type="submit" class="btn btn-primary">  Editar Curso</button>
        </div>
        @else
        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Crear Curso</button>
        </div>
        @endif
    </div>
</form>