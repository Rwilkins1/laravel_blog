@extends('layouts.master')

@section('content')
<div class = "row">
	<div class = "col-md-12 col-sm-8 text-center">
		<div class = "box">
			<h3>{{{$post['title']}}}</h3>
			<h4>{{{$post['body']}}}</h4>
			{{{$post['created_at']}}}
		</div>
	</div>
</div>

@stop