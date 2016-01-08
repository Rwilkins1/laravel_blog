@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Sign
                        <strong>In</strong>
                    </h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class = "row">
        	<div class = "box">
        		<div class = "col-lg-12 text-center">
        			<h2 class = "intro-text">Enter<strong> your information</strong>
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
        						<label for "password">Password</label>
        						<input type="password" class="form-control" name="password" id="password">
        					</div>
        				</div>
        			</form>
        		</div>
        	</div>
        </div>
</div> <!-- End of container -->
@stop