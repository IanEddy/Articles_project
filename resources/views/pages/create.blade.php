@extends('pages.layout')
@section('content')

<h2>Create An article</h2>

{!! Form::open(['url'=>'articles']) !!}
	
	@include('pages.form',['submitbuttontext'=>'Add Article'])

{!! Form::close() !!}

@include('errors.list')
@stop