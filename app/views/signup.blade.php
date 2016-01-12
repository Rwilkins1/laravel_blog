@extends('layouts.master')

@section('content')
<div class="container">
	<div class = "row">
    	<div class = "box">
    		<div class = "col-lg-12 text-center">
    			<h2 class = "intro-text">Please enter<strong> the information below to sign up!</strong>
    			</h2>
    			<div class = "errormessage">{{{$errors->first('username', ':message')}}}</div>
    			<div class = "errormessage">{{{$errors->first('email', ':message')}}}</div>
    			<div class = "errormessage">{{{$errors->first('phone', ':message')}}}</div>
    			<div class = "errormessage">{{{$errors->first('firstname', ':message')}}}</div>
    			<div class = "errormessage">{{{$errors->first('lastname', ':message')}}}</div>
    			<div class = "errormessage">{{{$errors->first('password', ':message')}}}</div>
    			<form role="form" action="{{{action('UsersController@store')}}}" method="POST">
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "username">Username</label>
    						<input type="text" class = "form-control" name="username" id="username">
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "email">Email Address</label>
    						<input type="text" class = "form-control" name="email" id="email">
    					</div>
    				</div>
    				<div class="row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "phone">Phone Number</label>
    						<input type="text" class="form-control" name="phone" id="phone">
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "firstname">First Name</label>
    						<input type="text" class = "form-control" name="firstname" id="firstname">
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "lastname">Last Name</label>
    						<input type="text" class = "form-control" name="lastname" id="lastname">
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "password">Password</label>
    						<input type="password" class="form-control" name="password" id="password">
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "confirm">Confirm Password</label>
    						<input type="password" class="form-control" name="confirm" id="confirm">
    					</div>
    				</div>
    				<button class = "btn btn-primary" value="submit"><span class="glyphicon glyphicon-thumbs-up"></span>Sign up!</button>
    			</form>
    		</div>
    	</div>
    </div>
</div>
@stop