@extends('layouts.master')
<?php
$posts = Post::all();
?>
@section('content')
<div class = "row">
	<div class = "col-md-12 col-sm-8 text-center">
		@foreach($posts as $individualposts)
			<div class = "box">
				<h3>{{{$individualposts['title']}}}</h3>
				<h4>{{{$individualposts['body']}}}</h4>
				{{{$individualposts['created_at']}}}
				<a href="{{{action('PostsController@show', array($individualposts['id']))}}}"><button class = "btn btn-primary">View this post</button></a>
			</div>
		@endforeach
	<a href="/posts/create"><button class = "btn btn-primary">Create a post!</button></a>
	</div>
</div>
@stop