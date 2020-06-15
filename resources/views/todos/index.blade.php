
@extends('layouts.app')
@section('content')
	<h1>Todo List</h1>
	@if(count($todos)>0)
		@foreach($todos as $todo)
		<div class="well">
			<h3><a href="/todo/{{ $todo->id }}">{{ $todo->text }}</a><span style="margin-left: 10px" class="label label-danger ">{{ $todo->due }}</span></h3>

		</div>
		@endforeach
	@endif
@endsection	
