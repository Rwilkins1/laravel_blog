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
			<form class = "form-horizontal" method = "POST" action="{{{action('PostsController@store')}}}">
					<div class ="form-group">
						<label class = "control-label" for "title">Title</label>
						<div class="col-sm-6">
							<input class = "form-control" type="text" name="title" id="title" value="{{{Input::old('title')}}}">
						</div>
					</div>
				<p>
					<div class = "form-group">
						<label class = "control-label" for "body">Body</label>
						<div class="col-sm-6">
							<textarea class="form-control" name="body" id="body" placeholder = "{{{Input::old('body')}}}"></textarea>
						</div>
					</div>
				</p>
				<button class = "btn btn-primary" value="submit">Submit</button>
			</form>
		</div>
	</div>
</div>
@stop