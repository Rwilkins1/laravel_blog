@extends('layouts.master')
<?php
	$errormessage = '';
?>
@section('content')
<div class="container">
	<div class="box">
		<div class="col-md-6 col-md-offset-3 text-center">
			<div class="errormessage">{{{$errormessage}}}</div>
			<div class="box">
				{{Form::open(array('class' => 'form-horizontal', 'method' => "POST", 'action' => 'UsersController@remind'))}}
					<div class="form-group">
						{{Form::label('email', 'Enter your email address', array('class' => 'control-label'))}}
						{{-- <div class="col-sm-6"> --}}
							{{Form::text('email', '', array('class' => 'form-control'))}}
						{{-- </div> --}}
						{{Form::label('username', 'Enter your username', array('class' => 'control-label'))}}
						{{-- <div class="col-sm-6"> --}}
							{{Form::text('username', '', array('class' => 'form-control'))}}
						{{-- </div> --}}
						{{Form::label('phone', 'Enter your phone number', array('class' => 'control-label'))}}
						{{-- <div class="col-sm-6"> --}}
							{{Form::text('phone', '', array('class' => 'form-control'))}}
						{{-- </div> --}}
					</div>
					<button class="btn btn-primary" value="submit">Get New Password</button>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>
@stop