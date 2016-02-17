@extends('pages.layout')
@section('content')

<h1><a href="{{action('ArticleController@index')}}">Articles</a></h1>
<h2>{{$article->title}}</h2>
<div class="body">{{$article->body}}</div>

@unless ($article->tags->isEmpty())
	<h2>Tags:</h2>
		<ul>
			@foreach ($article->tags as $tag)
				<li>{{$tag->name}}</li>

			@endforeach

		</ul>
@endunless

@stop