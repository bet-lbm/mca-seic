@if($subject->exists)
	<form class="form-horizontal" action="{{ route('update_subject_path',['subject'=>$subject->id]) }}" method="POST">
	{{ method_field('PUT') }}
@else
	<form class="form-horizontal" method="POST" action="{{ route('store_subject_path') }}">
@endif
	{{ csrf_field() }}

	<div class="form-group">
        <label for="name_subject" class="col-md-4 control-label">Nombre del Curso</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="name_subject" value="{{ $subject->name_subject or old('name_subject') }}" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="hours" class="col-md-4 control-label">hora de duracion</label>

        <div class="col-md-6">
            <input type="number" class="form-control" name="hours" value="{{ $subject->hours or old('hours') }}" required>

        </div>
    </div>

    <div class="form-group">
        <label for="max_students" class="col-md-4 control-label">numero max de estudiantes</label>

        <div class="col-md-6">
            <input type="number" class="form-control" name="max_students" value="{{ $subject->max_students or old('students') }}" required>

        </div>
    </div>

  <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </div>
</form>