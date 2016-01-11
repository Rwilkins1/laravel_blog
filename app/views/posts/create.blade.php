@extends('layouts.master')
{{-- 
<?php
$newpost = new Post();
$newpost->title = Input::get('title');
$newpost->body = Input::get('body');
if($newpost->title != null) {
	if($newpost->body != null) {
		$newpost->save();
	}
}
?> --}}
@section('content')
<div class = "box">
	<div class = "col-md-6 col-md-offset-3 text-center">
		<div class = "box">
			{{{$errors->first('title', ':message')}}}
			{{{$errors->first('body', ':message')}}}
			{{Form::open(array('class' => "form-horizontal", 'method' => "POST", 'action'=> 'PostsController@store'))}}
					<div class ="form-group">
						{{Form::label('title', 'Title', array('class' => "control-label"))}}
						<div class="col-sm-6">
							{{Form::text('title', '', array('class' => 'form-control'))}}
						</div>
					</div>
				<p>
					<div class = "form-group">
						{{Form::label('body', 'Body', array('class' => 'control-label'))}}
						<div class="col-sm-6">
							{{Form::textarea('body', '', array('class' => 'form-control'))}}
						</div>
					</div>
				</p>
				<button class = "btn btn-primary" value="submit">Submit</button>
			{{Form::close()}}
		</div>
	</div>
</div>
@stop