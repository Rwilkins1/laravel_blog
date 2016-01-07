@extends('layouts.master')

@section('content')
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Thank you for your message!
                <strong>I will respond as soon as I can</strong>
                <p>
                	You will be returned to the homepage in ...<span id = "counter"></span> seconds
                </p>
            </h2>
        </div>
    </div>
</div>
@stop

@section('bottom-script')
	<script>
		var start = 5;
		var end = 0;
		var go = setInterval(function() {
			$("#counter").html(start);
			if(start != end) {
				$("#counter").html(start);
				start = start - 1;
			} else {
				clearInterval(go);
				window.location.href = "/";
			}
		}, 1000);

	</script>
@stop