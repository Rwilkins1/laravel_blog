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
</style>
@stop

@section('content')
<div class="row">
	<div class="col-md-12 text-center">
		<div class="box">
			<h3>{{{$user['username']}}} ({{{$user['firstname']}}} {{{$user['lastname']}}})'s Posts:</h3>

		</div>
		@foreach($posts as $individualposts) 
			@if($individualposts['user_id'] == $user['id'])
				<div class="box">
					<a href="{{{action('PostsController@show', array($individualposts['id']))}}}"><h3>{{{$individualposts['title']}}}</h3></a>
					<h4>{{{ Str::limit($individualposts['body'], 60)}}}</h4>
				</div>
			@endif
		@endforeach
		<div class = "box">
			{{$posts->links()}}
		</div>
	</div>
</div>
@stop