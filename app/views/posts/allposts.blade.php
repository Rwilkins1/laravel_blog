@extends('layouts.master')
<?php
function whichuser($user_id)
{
	$user = User::find($user_id);
	return $user['username'];
}
?>

@section('top-script')
<style type="text/css">
	h3 {
		color: black;
		text-decoration: none;
	}
	h3:hover {
		color: blue;
		text-decoration: none;
		text-shadow: 5px 5px 5px black;
	}
	.btn-primary {
		margin-bottom: 15px;
	}
</style>
@stop
@section('content')
<div class = "row">
	<div class = "col-md-12 col-sm-8 text-center">
		@foreach($posts as $individualposts)
			<div class = "box">
				<a href="{{{action('PostsController@show', array($individualposts['id']))}}}"><h3>{{{$individualposts['title']}}}</h3></a>
				<h4>{{{ Str::limit($individualposts['body'], 60)}}}</h4>
				<p>
				Posted by: {{{whichuser($individualposts['user_id'])}}} on {{{$individualposts->created_at->setTimezone('America/Chicago')->format('l, F jS Y')}}} at {{{$individualposts->created_at->setTimezone('America/Chicago')->format('h:i A')}}}
				</p>
				@if(whichuser($individualposts['user_id']) == Session::get('loggedinuser'))
				<a href="{{{action('PostsController@edit', array($individualposts['id']))}}}"><button class="btn btn-primary">Edit this post</button></a>

				{{Form::open(array('url' => "/posts/$individualposts->id"))}}
					{{Form::hidden('_method', 'DELETE')}}
					{{Form::submit('Delete this Post', array('class' => 'btn btn-danger'))}}
				{{Form::close()}}
				@endif
			</div>
		@endforeach
		<div class = "box">
			{{$posts->links()}}
		</div>
	<a href="/posts/create"><button class = "btn btn-primary">Create a post!</button></a>
	</div>
</div>
@stop