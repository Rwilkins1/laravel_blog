@extends('layouts.master')
<?php
$class = "errormessage";
?>
@section('content')
<div class="container">
	<div class = "row">
		<div class = "box">
    			<h2 class = "intro-text text-center">Please enter<strong> the information below to sign up!</strong>
    			</h2>
			<div class = "col-lg-12 col-lg-offset-4 text-center">
    			<div class="{{{$class}}}" role="alert">
	    			<div >{{{$errors->first('username', ':message')}}}</div>
	    			<div >{{{$errors->first('email', ':message')}}}</div>
	    			<div >{{{$errors->first('phone', ':message')}}}</div>
	    			<div >{{{$errors->first('firstname', ':message')}}}</div>
	    			<div >{{{$errors->first('lastname', ':message')}}}</div>
	    			<div >{{{$errors->first('password', ':message')}}}</div>
    			</div>
    			{{Form::open(array('class' => "form-horizontal text-center", 'method' => 'POST', 'action' => 'UsersController@store'))}}
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						{{Form::label('username', 'Username', array('class' => 'control-label')) }}
    						{{Form::text('username', '', array('class' => 'form-control'))}}
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						{{Form::label('email', 'Email Address', array('class' => 'control-label'))}}
    						{{Form::text('email', '', array('class' => 'form-control'))}}
    					</div>
    				</div>
    				<div class="row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						{{Form::label('phone', 'Phone Number', array('class' => 'control-label'))}}
    						{{Form::text('phone', '', array('class' => 'form-control'))}}
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						{{Form::label('firstname', 'First Name', array('class' => 'control-label'))}}
    						{{Form::text('firstname', '', array('class' => 'form-control'))}}
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						{{Form::label('lastname', 'Last Name', array('class' => 'control-label'))}}
    						{{Form::text('lastname', '', array('class' => 'form-control'))}}
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						{{Form::label('password', 'Password', array('class' => 'control-label'))}}
    						<input type="password" class="form-control" name="password" id="password">
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						{{Form::label('confirm', 'Confirm Password', array('class' => 'control-label'))}}
    						<input type="password" class="form-control" name="confirm" id="confirm">
    					</div>
    				</div>
    		</div>
    		<div class="text-center">
    				<button class = "btn btn-primary text-center" value="submit"><span class="glyphicon glyphicon-thumbs-up"></span>Sign up!</button>
    			{{Form::close()}}
    		</div>
    	</div>
    </div>
</div>
@stop