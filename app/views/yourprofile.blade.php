@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-12 text-center">
		<div class="box">
			<h1>Hello, {{{$userinfo->firstname}}}</h1>
			<a href="{{{action('UsersController@editprofile')}}}"><button class="btn btn-success">Edit Your Profile</button></a>
			<a href="/logout"><button class = "btn btn-warning">Log Out</button></a>
		</div>
	</div>
</div>
@stop