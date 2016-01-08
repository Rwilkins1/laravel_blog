@extends('layouts.master')

@section('content')
<div class = "row">
	<div class = "col-md-12 col-sm-8">
		@foreach($posts as $individualposts)
			<div class = "box">
				<h3>{{{$individualposts['title']}}}</h3>
				{{{$individualposts['body']}}}
			</div>
		@endforeach
	</div>
</div>
@stop