@extends('layouts.master')
<?php
function whichuser($user_id)
{
	$user = User::find($user_id);
	return $user['username'];
}
?>
@section('content')
<div class = "row">
	<div class = "col-md-12 col-sm-8 text-center">
		@foreach($posts as $individualposts)
			<div class = "box">
				<h3>{{{$individualposts['title']}}}</h3>
				<h4>{{{$individualposts['body']}}}</h4>
				<p>
				Posted by: {{{whichuser($individualposts['user_id'])}}} at {{{$individualposts['created_at']}}}
				</p>
				<a href="{{{action('PostsController@show', array($individualposts['id']))}}}"><button class = "btn btn-primary">View this post</button></a>
				<a href="{{{action('PostsController@edit', array($individualposts['id']))}}}"><button class="btn btn-primary">Edit this post</button></a>
				<a href="{{{action('PostsController@destroy', array($individualposts['id']))}}}"><button class = "btn btn-danger">Delete this post</button></a>
			</div>
		@endforeach
		<div class = "box">
			{{$posts->links()}}
		</div>
	<a href="/posts/create"><button class = "btn btn-primary">Create a post!</button></a>
	</div>
</div>
@stop