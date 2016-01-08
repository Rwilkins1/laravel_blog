<!DOCTYPE html>
<html>
<head>
	<title>Whack-a-Mole</title>
	<link rel="stylesheet" type="text/css" href="/CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/CSS/whack.css">
</head>
<body>

<!-- The Banner -->
	<div id = "banner"><br><h3>Whack-a-Mole</h3></div>

<!-- The Homeowner Picture -->
	<div id = "homeowner"></div>

<!-- Start Button -->
	<a href = "#holes"><div id = "start">Start</div></a>

<!-- Timer -->
	<div id = "timeleft">Time Remaining:<br><div id = "time"></div></div>

<!-- Total Number of Moles -->
	<div id = "totals">Total Moles: <div id = "totalnum"></div></div>

<!-- Moles Whacked -->
	<div id = "scoreboard">Moles Whacked: <div id = "score"></div></div>

<!-- Your Grade -->
	<div id = "gradecard">Grade: <div id = "grade"></div></div>

<!-- The Game Manual -->
	<div id = "manual">How to Play</div>

<!-- Difficulty Selector -->
	<div id = "mode">
		<p>Select a Mode</p>
		<label><input type = "radio" name = "diff" id = "normal" value = "normal" checked>Gardener</label><br>
		<label><input type = "radio" name = "diff" id = "challenge" value = "challenge">Suburban Gardener</label><br>
		<label><input type = "radio" name = "diff" id = "superchallenge" value = "superchallenge">Gated Community Gardener</label>
	</div>

<!-- # of Rounds Completed -->
	<div id = "roundcount">Rounds Completed: <div id = "rounds"></div></div>

<!-- Highest # of Rounds Completed -->
	<div id = "highcount">High Score: <div id = "high">0</div></div>

<!-- Clear the High Score -->
	<div id = "clearhigh">Clear High Score</div>
	
<!-- The Holes Themselves -->
	<div id = "holes">
		<div class = "hole1" id = "tl"><div class = "dirt"></div></div>
		<div class = "hole2" id = "tm"><div class = "dirt"></div></div>
		<div class = "hole3" id = "tr"><div class = "dirt"></div></div>
		<div class = "hole1" id = "ml"><div class = "dirt"></div></div>
		<div class = "hole2" id = "mm"><div class = "dirt"></div></div>
		<div class = "hole3" id = "mr"><div class = "dirt"></div></div>
		<div class = "hole1" id = "bl"><div class = "dirt"></div></div>
		<div class = "hole2" id = "bm"><div class = "dirt"></div></div>
		<div class = "hole3" id = "br"><div class = "dirt"></div></div>
	</div>

<!-- JavaScript starts here! -->
<script src = "/js/jquery.js"></script>
<script>
"Use Strict";
(function() {
// Necessary Global Variables
	var spaces = ["tl", "tm", "tr", "ml", "mm", "mr", "bl", "bm", "br"];
	var streak = 0;
	var tot = 0;
	var grade = 0;
	var round = 0;

// Conditions to be met when the page loads
	$("#rounds").html(round);
	$("#grade").html(grade + "%");
	$("#time").html(0);
	$("#score").html(streak);
	$("#totalnum").html(tot);

// Changes the dirt
	$("h3").on("click", function() {
		var ran = (Math.floor(Math.random()*5));
		var background = ["http://whackamole.dev/img/dirt.png", "http://whackamole.dev/img/dirt1.png", "http://whackamole.dev/img/dirt2.png", "http://whackamole.dev/img/dirt3.png", "http://whackamole.dev/img/dirt4.png"];
		$("#holes").css("background-image", "url(" + background[ran] + ")");
	});

// Sets the interior of the High Score
	if(localStorage.getItem("highscore") >= 1) {
		$("#high").html(localStorage.getItem("highscore"));
	} else {
		$("#high").html(0);
	}

// Starts the Game
	$("#start").click(function() {
		clicker();
		timer();
	});

// Clears the High Score
	$("#clearhigh").click(function() {
		localStorage.clear();
		$("#high").html(0);
	});

// Sets the timer for the game
	function timer() {

	// Local Variables
		var timestart = 30;
		var timeend = 0;
		streak = 0;
		tot = 0;

	// Makes timer go down
		var go = setInterval(function() {
			if(timestart < timeend) {
				clearInterval(go);
				check();
			} else {
				$("#time").html(timestart + " seconds");
				popup();
				timestart -= 1;
			}
		}, 1000);

	}

// Causes the moles to pop up
	function popup() {

	// Local Variables
		var random = (Math.floor(Math.random()* 9));
		var first = 0;
		var second = 1;

	// The up and down interval
		var goagain = setInterval(function() {
			var ran_dom = (Math.floor(Math.random()*5)+1);
			if(first >= second) {
				$("#" + spaces[random] + "").css("opacity", "0");
				$("#totalnum").html(tot++);
				clearInterval(goagain);
			} else {
				$("#" + spaces[random] + "").css("opacity", "1");
			// Causes the homeowner animation
				if($("#superchallenge").is(':checked')) {
					console.log(ran_dom);
					if(ran_dom == 3) {
						$("#homeowner").animate({
							left: "+=70%"
						}, 500).animate({
							left: "150%"
						}, 500).animate({
							left: "-100%"
						}, 1000);
					}
				}
				first++;
			}
		}, 900);

	}

// Gives you points
	function clicker() {
		$("#holes").children().click(function(){
			var audio1 = new Audio('whack.wav');
			var audio4 = new Audio('no.wav');
		// On Normal
			if($("#normal").is(':checked')) {
				if($(this).css("opacity") == 1) {
					audio1.play();
					$("#score").html(streak++);
					$("#grade").html(Math.floor((streak/tot)*100) + "%");
					popup();
					$(this).css("opacity", "0");
				} else {

				}
		// On Challenge
			} else if($("#challenge").is(':checked')) {
				if($(this).css("opacity") == 1) {
					audio1.play();
					$("#score").html(streak++);
					$("#grade").html(Math.floor((streak/tot)*100) + "%");
					popup();
					$(this).css("opacity", "0");
				} else {
					$("#score").html(streak-=1);
					audio4.play();
				}	
		// On Superchallenge 
			} else if($("#superchallenge").is(':checked')) {
				if($(this).css("opacity") == 1) {
					audio1.play();
					$("#score").html(streak++);
					$("#grade").html(Math.floor((streak/tot)*100) + "%");
					popup();
					$(this).css("opacity", "0");
				} else if($(this).css("opacity") == 0) {
					$("#score").html(streak-=1);
					audio4.play();
				}

			}
		});
	}

// Determines your results
	function check() {

	// Local Variables
		var audio2 = new Audio('gameover.wav');
		var audio3 = new Audio('nextround.wav');
		var totscore = (Math.floor((streak/tot)*100));

	// Results
		if(totscore >= 40) {
			(round += 1);
			audio3.play();
			alert("Round " + (round + 1) + " Starts Now");
			$("#rounds").html(round);
			timer();
		} else {
			audio2.play();
			alert("Game Over!");
			if($("#high").html() < round){
				localStorage.setItem("highscore", round);
				$("#high").html(localStorage.getItem("highscore"));
			} else {

			}
			location.reload(true);
			$("#rounds").html(0);
			round = 0;
		} 

	}

// Brings up the game manual
	$("#manual").click(function() {
		alert("When a mole (of any kind) pops up, click on it, and you'll earn a point. Every point you earn goes to your grade, which is the percentage of the total number of moles that popped up that you clicked. If your grade at the end of the round is a 40% or higher, then you will proceed to the next round. If it is under 40%, then it is Game Over! Your goal is to win as many rounds as possible.                                               There are three game modes: Gardener (Normal), Suburban Gardener (Challenge), and Gated Community Gardener (Superchallenge). The goal is the same in all modes, but the game itself varies in each. In Suburban Gardener mode, you are penalized by one point every time you click on the dirt. In Gated Community Gardener mode, you are penalized for clicking on the dirt, and occasionally, the homeowners will bother you.");
	});

})();
</script>
</body>
</html>