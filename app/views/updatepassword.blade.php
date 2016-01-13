@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="box">
			<div class = "col-lg-12 text-center">
				<h2>Enter a <strong>new password</strong></h2>
				<form role="form" action="{{{action('UsersController@updatepassword')}}}" method="POST">
					<div class="row">
						<div class="form-group col-lg-4 col-lg-offset-4">
							<label for "password
							" class="control-label">New Password</label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						<div class="form-group col-lg-4 col-lg-offset-4">
							<label for "confirm" class="control-label">Confirm New Password</label>
							<input type="password" class="form-control" name="confirm" id="confirm">
						</div>
					</div>
						<button class="btn btn-primary" value="submit">Edit Password!</button>
				</form>
			</div>
		</div>
	</div>
</div>
@stop