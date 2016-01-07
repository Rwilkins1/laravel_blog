@extends('layouts.master')

@section('top-script')
<style>
	#lastone {
		margin-bottom: 5%;
	}
	ul {
		list-style-type: none;
		/*margin-bottom: -.8%;
		border: 5px double black;
		background-color: gold;
		padding-bottom: 2%;*/
	}
	li {

	}
	.inner {
		background-color: skyblue;
	}
	.heading {
		background-color: gray;
		padding-bottom: 2%;
		margin-bottom: -2%;
	}
	#list1 {
		display: none;
	}
	#list2 {
		display: none;
	}
	#list3 {
		display:none;
	}
	#list4 {
		display:none;
	}
	#list5 {
		display:none;
	}
	#list6 {
		display:none;
	}
</style>
@stop

@section('content')
<div class = "row">
	<div class = "col-md-12 col-sm-8 text-center">
		<h2>Reagan Wilkins</h2>
		<h4>1009 Garraty Road</h4>
		<h4>San Antonio, TX 78209</h4>
		<h4>979-224-0816</h4>
		<h4 id = "lastone">reagan.wilkins@gmail.com</h4>
		<div class = "col-md-12">
			<h4 id="heading1" class = "heading"><strong>Education and Academic Honors</strong></h4>
			<ul id="list1">
				<li>Trinity University, San Antonio, TX</li>
				<li>Bachelor of Arts, May 2015</li>
				<li>Cumulative GPA: 3.564</li>
				<li>Major - Religion; Minor - Creative Writing</li>
				<li>National Society of Collegiate Scholars</li>
				<li>Dean's List</li>
				<li>Codeup Full-Stack Bootcamp, September 2015-February 2016</li>
			</ul>
		</div>
		<div class = "col-md-12 col-sm-8 text-center">
			<h4 id="heading2" class = "heading"><strong>Proficiencies</strong></h4>
			<ul id="list2">
				<li>HTML</li>
				<li>CSS</li>
				<li>JavaScript</li>
				<li>jQuery</li>
				<li>PHP</li>
			</ul>
		</div>
		<div class = "col-md-12 col-sm-8 text-center">
			<h4 id="heading3" class = "heading"><strong>Volunteering/Extracurricular Activities</strong></h4>
			<ul id = "list3">
				<li id ="heading4"><strong>The Right Trigger, Summer 2013-Present</strong></li>
				<ul class ="inner">
					<li>Created and currently contribute to a video game review blog called "The Right Trigger"</li>
					<li>Review triple-A titles as well as small, independently developed titles</li>
				</ul>
				<li id="heading5"><strong>The Children's Shelter, San Antonio, TX: Fall 2012-Spring 2015</strong></li>
				<ul class ="inner">
					<li>Tutored and interacted with at-risk children between the ages of 6 and 10</li>
					<li>Provided academic assistance and emotional support</li>
					<li>Demonstrated patience and ability to remain in control in high-pressure situations</li>
				</ul>
				<li id="heading6"><strong>Intervarsity Christian Fellowship, Trinity University: Spring 2014-Spring 2015</strong></li>
				<ul class ="inner">
					<li>Led weekly small group discussion related to social justice in a biblical context</li>
					<li>Recruited members and planned with flexibility</li>
					<li>Participated in worship band</li>
				</ul>
				<li></li>
			</ul>
		</div>
	</div>
</div>
@stop

@section('bottom-script')
<script type="text/javascript">
$("#heading1").click(function() {
	$("#list1").slideToggle();
});
$("#heading2").click(function() {
	$("#list2").slideToggle();
});
$("#heading3").click(function() {
	$("#list3").slideToggle();
});
</script>
@stop