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
	h5 {
        margin-top: 15px;
        margin-bottom: -5px;
    }
	.inner {
		background-color: #C0C0C0;
        padding-top: 20px;
        padding-bottom: 20px;
	}
	.heading {
		background-color: gray;
		padding-bottom: 2%;
		margin-bottom: -2%;
	}
    .resumetext {
        color: white;
    }
    .objective {
        display: none;
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
    #trigger {
        color:white;
        text-decoration: none;
    }
    .jumbotron {
        background-color: gray;
        border: 5px double black;
    }
    .resumepic {
        height: ;
    }
</style>
@stop

@section('content')
<div class = "row">
    <h4 class="resumetext text-center">Note: If viewing on mobile, landscape view is recommended</h4>
    <div class="col-md-12">
        <img class ="resumepic" src="/img/resume.png">
    </div>
   {{--  <div class = "box">
        <div class = "col-md-12 text-center">
            <div class = "intro-text">
                <h1>Click on a category<strong> to view my information</strong></h1>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <div class="box">
            <h4 id="headingagain">Objective</h4>
            <span class="objective">
                <h5>I am looking to be a part of a web development team in a position that:</h5>
                <ul>
                    <li>1) Allows me to apply my love of solving complex programming problems</li>
                    <li>2) Provides an environment in which I can continue to grow in my skills as a programmer </li>
                    and
                    <li>3) Consistently requires that I continue to improve my work.</li>
                </ul>
            </span>
        </div>
    </div>
	<div class = "col-md-12 text-center">
        <div class = "box">
            <h4 id="heading1"><strong>Education and Academic Honors</strong></h4>
            <ul id="list1">
                <h5><li>Trinity University, San Antonio, TX</li></h5>
                <li>-Bachelor of Arts, May 2015</li>
                <li>-Cumulative GPA: 3.564</li>
                <li>-Major: Religion; Minor: Creative Writing</li>
                <h5><li>National Society of Collegiate Scholars</li></h5>
                <li>-Member, Spring 2013-Spring 2015</li>
                <h5><li>Dean's List</li></h5>
                <li>-Member, Spring 2014-Spring 2015</li>
                <h5><li>Codeup Full-Stack Bootcamp, September 2015-February 2016</li></h5>
            </ul>
        </div>
	</div>
	<div class = "col-md-12 text-center">
        <div class = "box">
			<h4 id="heading2"><strong>Proficiencies</strong></h4>
			<ul id="list2">
				<li>HTML
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div>
                </li>
				<li>CSS
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div>
                </li>
                <li>Twitter Bootstrap
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                    </div>
                </li>
				<li>JavaScript
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div>
                </li>
				<li>jQuery
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                    </div>
                </li>
				<li>PHP
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                    </div>
                </li>
                <li>MySQL
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                    </div>
                </li>
                <li>Laravel
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div>
                </li>
			</ul>
        </div>
	</div>
	<div class = "col-md-12 text-center">
        <div class = "box">
            <h4 id="heading3"><strong>Volunteering/Extracurricular Activities</strong></h4>
            <ul id = "list3">
            <div class = "jumbotron">
                <h3><li id ="heading4"><strong>The Right Trigger, Summer 2013-Present</strong></li></h3>
                <p>
                    <ul class ="inner">
                        <li>Created and currently contribute to a video game review blog called "The Right Trigger"</li>
                        <li>Review triple-A titles as well as small, independently developed titles</li>
                    </ul>
                        <button class = "btn btn-primary"><a id="trigger" href="http://therighttriggerreviews.blogspot.com" target="_blank">Visit "The Right Trigger"</a></button>
                </p>
            </div>
            <div class = "jumbotron">
                <p>
                    <h3><li id="heading5"><strong>The Children's Shelter, San Antonio, TX: Fall 2012-Spring 2015</strong></li></h3>
                    <ul class ="inner">
                        <li>Tutored and interacted with at-risk children between the ages of 6 and 10</li>
                        <li>Provided academic assistance and emotional support</li>
                        <li>Demonstrated patience and ability to remain in control in high-pressure situations</li>
                    </ul>
                    <a id="trigger" href="http://www.childrensshelter.org" target="_blank"><button class = "btn btn-primary">Learn more about the Children's Shelter</button></a>
                </p>
            </div>
            <div class = "jumbotron">
                <p>
                    <h3><li id="heading6"><strong>Intervarsity Christian Fellowship, Trinity University: Spring 2014-Spring 2015</strong></li></h3>
                    <ul class ="inner">
                        <li>Led weekly small group discussion related to social justice in a biblical context</li>
                        <li>Recruited members and planned with flexibility</li>
                        <li>Participated in worship band</li>
                    </ul>
                    <a id="trigger" href="https://intervarsity.org" target="_blank"><button class = "btn btn-primary">Learn more about Intervarsity</button></a>
                </p>
            </div>
                <li></li>
            </ul>
        </div>
	</div>
</div> --}}
</div>
@stop

@section('bottom-script')
<script type="text/javascript">
function jqUpdateSize(){
    // Get the dimensions of the viewport
    var width = $(window).width();
    var height = $(window).height();

    if(width < 900) {
        $(".resumepic").css("width", (width) + "px").css("margin-left", "0px");
    } else {
        $(".resumepic").css("width", (width-100) + "px").css("margin-left", "50px");
    }
    if(height < 500) {
        $(".resumepic").css("height", (height*2) + "px");
    } else if(width > 600) {
        $(".resumepic").css("height", (height*1.5) + "px");
    } else {
        $(".resumepic").css("height", height + "px");
    }
    console.log("Height " + height);
    console.log("Width " + width);
};
$(document).ready(jqUpdateSize);
    // When the page first loads
$(window).resize(jqUpdateSize); 

$("#headingagain").click(function() {
    $(".objective").slideToggle();
});

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