@if($classroom->exists)
	<form action="{{ route('update_classroom_path',['classroom'=>$classroom->id]) }}" method="POST">
	{{ method_field('PUT') }}
@else
	<form class="form-horizontal" method="POST" action="{{ route('store_classroom_path') }}">
@endif
	{{ csrf_field() }}

	<div class="form-group">
        <label for="num_class" class="col-md-4 control-label">Número de aula</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="num_class" value="{{ $classroom->num_class or old('num_class') }}" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-md-4 control-label">Descripción</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="description" value="{{ $classroom->description or old('description') }}" required>

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