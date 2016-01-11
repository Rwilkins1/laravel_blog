@extends('layouts.master')

@section('content')
<div class = "row">
	<div class = "col-md-6 col-md-offset-3 text-center">
		<div class = "box">
			{{Form::open(array('class' => "form-horizontal", 'method'=>"POST", 'action'=>'PostsController@update'))}}
				<div class="form-group">
					{{Form::label('title', 'Title', array('class' => 'control-label'))}}
					<div class="col-sm-6">
						{{Form::text('title', "$posttoupdate->title", array('class' => 'form-control'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('body', 'Body', array('class' => 'control-label'))}}
					<div class="col-sm-6">
						{{Form::textarea('body', "$posttoupdate->body", array('class' => 'form-control'))}}
					</div>
				</div>
				<button class="btn btn-primary" value="submit">Update</button>
			{{Form::close()}}
		</div>
	</div>
</div>
@stop
