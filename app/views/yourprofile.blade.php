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
	.deleter {
		margin-top: 15px;
	}
</style>
@stop

@section('content')
<div class="row">
	<div class="col-md-12 text-center">
		<div class="box">
			<h1>Hello, {{{Auth::user()->firstname}}}</h1>
			<h2>Your Posts:</h2>
		</div>
		@foreach($posts as $individualposts)
			
				<div class="box">
					<a href="{{{action('PostsController@show', array($individualposts->id))}}}"><h3>{{{$individualposts->title}}}</h3></a>
					<h4>{{{ Str::limit($individualposts->body, 60)}}}</h4>
					<p>
						Posted on {{{$individualposts->created_at}}}
					</p>
					<a href="{{{action('PostsController@edit', array($individualposts->id))}}}"><button class="btn btn-primary">Edit this post</button></a>

					{{Form::open(array('url' => "/posts/$individualposts->id"))}}
					{{Form::hidden('_method', 'DELETE')}}
					{{Form::submit('Delete this Post', array('class' => 'btn btn-danger deleter'))}}
					{{Form::close()}}
				</div>
			
		@endforeach
		{{$posts->links()}}
		<div class="box">
			<a href="/posts/create"><buton class="btn btn-primary">Create a post</button></a>
			<a href="{{{action('UsersController@editprofile')}}}"><button class="btn btn-success">Edit Your Profile</button></a>
			<a href="{{{action('UsersController@showpassword')}}}"><button class="btn btn-warning">Edit Your Password</button></a>
			<a href="/logout"><button class = "btn btn-danger">Log Out</button></a>
		</div>
	</div>
</div>
@stop