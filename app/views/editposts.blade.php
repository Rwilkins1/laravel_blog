@extends('layouts.master')

@section('content')
<div class = "row">
	<div class = "col-md-6 col-md-offset-3 text-center">
		<div class = "box">
			<form class = "form-horizontal" method="PATCH" action="{{{action('PostsController@update')}}}">
				<div class="form-group">
					<label class="control-label" for "title">Title</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="title" id="title" value="{{{$posttoupdate['title']}}}">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" for "body">Body</label>
					<div class="col-sm-6">
						<textarea class="form-control" name="body" id="body" placeholer="{{{$posttoupdate['body']}}}">{{{$posttoupdate['body']}}}</textarea>
					</div>
				</div>
				<button class="btn btn-primary" value="submit">Update</button>
			</form>
		</div>
	</div>
</div>
@stop
