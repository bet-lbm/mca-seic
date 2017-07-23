@extends('layouts.app')
@section('content')
<div class="container">
	
</div> <div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>{{ $classroom->num_class }}</h2>
		<p>{{ $classroom->description }}</p>
	</div>
</div>
@endsection