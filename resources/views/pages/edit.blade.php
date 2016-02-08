@extends('pages.layout')
@section('content')

<h2> Edit: {{ $articles->title }}</h2>

{!! Form::model($articles,['method'=>'PATCH','action'=>['ArticleController@update',$articles->id]]) !!}
	
	@include('pages.form',['submitbuttontext'=>'Update Article'])


{!! Form::close() !!}

@include('errors.list')

@stop