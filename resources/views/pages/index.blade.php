@extends('app')

@section('content')

@foreach($task as $tasks)
<article>

	<h1>{{$tasks->taskname}}</h1>

	
	<div class="body">this task </div>
</article>
@endforeach
@stop