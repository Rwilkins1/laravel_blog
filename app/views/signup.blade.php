@extends('layouts.master')

@section('content')
<div class="container">
	<div class = "row">
    	<div class = "box">
    		<div class = "col-lg-12 text-center">
    			<h2 class = "intro-text">Please enter<strong> the information below to sign up!</strong>
    			</h2>
    			<form role="form" action="/login" method="POST">
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
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "first_name">First Name</label>
    						<input type="text" class = "form-control" name="first_name" id="first_name">
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "last_name">Last Name</label>
    						<input type="text" class = "form-control" name="last_name" id="last_name">
    					</div>
    				</div>
    				<div class = "row">
    					<div class="form-group col-lg-4 col-lg-offset-4">
    						<label for "username">Username</label>
    						<input type="text" class = "form-control" name="username" id="username">
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
    				<button class = "btn btn-primary" value="submit">Sign up!</button>
    			</form>
    		</div>
    	</div>
    </div>
</div>
@stop