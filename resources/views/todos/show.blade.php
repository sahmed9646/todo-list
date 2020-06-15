@extends('layouts.app')
@section('content')
	<a class="btn btn-default" href="/">Go Back</a>
	<h2><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h2>
	<div class="label label-danger"><span>{{$todo->due}}</span></div>
	<hr>
	<p>{{$todo->body}}</p>

	<br/><br/>
	<a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
	{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
		{{ Form::hidden('_method', 'DELETE') }}
		{{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
	{!! Form::close() !!}
@endsection
