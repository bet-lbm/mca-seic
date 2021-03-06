@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                  @yield('head')
                </div>
              	<div class="panel-body"> 
                  @include ('layouts._errors')
                  @include ('layouts._messages')
                  @yield('body')
              	</div>
             </div>
             @yield('extra')
        </div>
    </div>
</div>
@endsection