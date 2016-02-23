@extends('layouts.master') 

@section('top-script')
<style>
	h1 {
		margin-bottom: 5%;
	}
	
	ul {
		list-style-type: none;
	}
	/*li {
		margin-bottom: 15%;
		padding-bottom: 5%;
		border: 5px double black;
		background-color: gold;
	}*/
	.sec {
		height: 500px;
	}
</style>
@stop

@section('content')
<div class = "row">
	<div class = "col-md-12 text-center">
		<div class = "box">
			<h1>Programming Projects <strong>I've Worked On</strong></h1>
		</div>

		<div class = "col-md-4">
			
			<div class = "box">
				<h4>Simple Simon (a JavaScript game built on the jQuery library):</h4><a href="{{{action('HomeController@simplesimon')}}}" target = "_blank"><img id="simplesimon" src="/img/simplesimon.png"></a></li>
			</div>
		</div>
		<div class = "col-md-4">
			<div class = "box">
				<h4>Whack-a-Mole (a JS game built on the jQuery library):</h4><a href="{{{action('HomeController@whackamole')}}}" target="_blank"><img id = "whackamole" src="/img/whackamole.png"></a></li>
			</div>
		</div>
		<div class = "col-md-4">
			<div class = "box">
				<h4>Spatula City (A spatula-based Adlister built in a team setting):</h4><img id="spatulacity" src="/img/spat.png"></a></li>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 text-center">
		<div class="col-md-4">
			<div class="box">
				<h4>Calculator (A fully functioning JavaScript application with 14 different operators):</h4><img id="calculator" src="/img/calculator.png">
			</div>
		</div>
		<div class = "col-md-4">
			<div class = "box">
				<h4>Battlequest (A fully functioning 80's-style Command-Line Choose Your Own Adventure Game)</h4><img src="/img/battlequest.png"></li>
			</div>
		</div>
		<div class = "col-md-4">
			<div class = "box">
				<h4>Battlequest 2 [In Development] (A Choose Your Own Adventure Game with turn-based combat implemented)</h4><img src="/img/battlequest2.png"></li>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 text-center">
		<div class = "col-md-4">
			<div class = "box">
				<h4>Battlequest 3 [In Development] (A sidescroller game with a variety of environments, enemies, and attack types)</h4><img src="/img/battlequest3.png"></li>
			</div>
		</div>
		<div class = "col-md-4 sec">
			<div class = "box">
				<h4>Social Notes (Codeup Capstone Project: A social network and online note-taking application all in one!)</h4><a href="{{{action('HomeController@socialnotes')}}}" target="blank"><img src="/img/socialnotes.png"></a></li>
			</div>
		</div>
		<div class = "col-md-4 sec">
			<div class = "box">
				<h4>Bo Wilkins for President (A silly, but nonetheless functioning website about my dog's Presidential Campaign)</h4><a href="{{{action('HomeController@bowilkins')}}}" target="blank"><img src="/img/bowilkins.png"></a></li>
			</div>
		</div>
	</div>
</div>
		{{-- </div>
	</div> --}}
{{-- <div class = "row">
	<div class = "col-md-8 "></div>
</div> --}}
</div>
@stop