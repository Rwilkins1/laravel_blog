@extends('layouts.master')

@section('top-script')
<style>
	.btn-primary {
		margin-bottom: 5px;
	}
</style>
@stop

@section('content')
<div class="container">
        <div class = "row">
        	<div class = "box">
        		<div class = "col-lg-12 text-center">
        			<h2 class = "intro-text">Enter<strong> your information</strong>
        			</h2>
        			<form role="form" url= "/login" method="POST">
        				<div class = "row">
        					<div class="form-group col-lg-4 col-lg-offset-4">
        						<label for "email">Email</label>
        						<input type="text" class = "form-control" name="email" id="email">
        					</div>
        				</div>
        				<div class = "row">
        					<div class="form-group col-lg-4 col-lg-offset-4">
        						<label for "password">Password</label>
        						<input type="password" class="form-control" name="password" id="password">
        					</div>
        				</div>
        				<button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>Log in!</button>
        			</form>
        				<a href="{{{action('UsersController@forgotpassword')}}}"><button class="btn btn-warning">Forgot Password?</button></a>
        		</div>
        	</div>
        </div>
</div> <!-- End of container -->
@stop