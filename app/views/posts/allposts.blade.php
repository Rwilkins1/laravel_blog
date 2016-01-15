@extends('layouts.master')

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
		<div class="box">
			<form class="form-horizontal col-md-4 col-md-offset-4" method="POST" action="{{{action('PostsController@search')}}}">
				<div class="form-group">
					<label class="control-label" for "title">Search for a post by title</label>
					<input type="text" class="form-control" id="title" name="title">
					<button class="btn btn-primary">Search</button>
				</div>
			</form>
		</div>
		@foreach($posts as $individualposts)
			<div class = "box">
				@if($individualposts->image_url != null)
				<img src="{{{$individualposts->image_url}}}">
				@endif
				<a href="{{{action('PostsController@show', $individualposts->id)}}}"><h3>{{{$individualposts->title}}}</h3></a>
				<h4>{{{ Str::limit($individualposts->body, 60)}}}</h4>
				<p>
				Posted by: {{{$individualposts->user->username}}} on {{{$individualposts->created_at->format('l, F jS Y')}}} at {{{$individualposts->created_at->format('h:i A')}}}
				</p>
				@if($individualposts->user->username == Session::get('loggedinuser'))
				<a href="{{{action('PostsController@edit', array($individualposts['id']))}}}"><button class="btn btn-primary">Edit this post</button></a>

				{{Form::open(array('url' => "/posts/$individualposts->id", 'id' => 'deleteform'))}}
					{{Form::hidden('_method', 'DELETE')}}
				{{Form::close()}}
					<button class ="btn btn-danger" id="deleter" data-id="{{{$individualposts->id}}}" data-name="{{{$individualposts->title}}}">Delete this Post!</button>
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

@section('bottom-script')
<script src="/js/jquery.js"></script>
<script>
"Use Strict";
	$("#deleter").click(function() {
		var postid = $(this).data("id");
		var posttitle = $(this).data("name");
		if(confirm("Are you sure you want to delete: " + posttitle + "?")) {
			$("#deleteform").submit();
		}
	});
</script>
@stop