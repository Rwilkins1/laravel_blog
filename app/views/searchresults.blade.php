@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-8 text-center">
			<div class="box">
				<h3>{{{$post_title}}}</h3>
				<h4>{{{$post_body}}}</h4>
			</div>
		</div>
	</div>
</div>
@stop