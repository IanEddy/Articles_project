@extends('pages.layout')
@section('content')

<h1><a href="{{action('ArticleController@index')}}">Articles</a></h1>
<h2>{{$article->title}}</h2>
<div class="body">{{$article->body}}</div>

@stop