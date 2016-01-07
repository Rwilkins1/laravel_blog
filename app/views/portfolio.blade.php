@extends('layouts.master') 

@section('top-script')
<style>
	h1 {
		margin-bottom: 5%;
	}
	img {
		height: 300px;
		width: 300px;
		border: 5px double black;
	}
	ul {
		list-style-type: none;
	}
	li {
		margin-bottom: 15%;
		padding-bottom: 5%;
		border: 5px double black;
		background-color: gold;
	}
</style>
@stop

@section('content')
<div class = "row">
	<div class = "col-md-12 col-sm-8 text-center">
		<h1>Programming Projects I've Worked On</h1>
		<div class = "col-md-4 col-md-offset-4">
			<ul>
				<li><h4>Simple Simon:</h4><a href="simplesimon.dev"><img id="simplesimon" src="/img/simplesimon.png"></a></li>
				<li><h4>Whack-a-Mole:</h4><a href="whackamole.dev"><img id = "whackamole" src="/img/whackamole.png"></a></li>
				<li><h4>Spatula City (A spatula-based Adlister):</h4><a href="adlister.dev" target="_blank"><img id="spatulacity" src="/img/spatulacity.png"></a></li>
				<li><h4>Battlequest (A fully functioning 80's-style Command-Line Choose Your Own Adventure Game)</h4><img src="/img/battlequest.png"></li>
				<li><h4>Battlequest 2 [In Development] (A Choose Your Own Adventure Game with turn-based combat implemented)</h4><img src="/img/battlequest2.png"></li>
			</ul>
		</div>
	</div>
{{-- <div class = "row">
	<div class = "col-md-8 "></div>
</div> --}}
</div>
@stop

@section('bottom-script')
	<script>
		$("#simplesimon").click(function() {
			window.location.href = '../simplesimon.dev';
		});
		$("#whackamole").click(function() {
			window.location.href = '../whackamole.dev';
		});
	</script>
@stop