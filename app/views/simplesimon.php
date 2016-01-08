<!DOCTYPE html>
<html>
<head>
	<title>Simple Simon</title>
	<link rel="stylesheet" type="text/css" href="/CSS/simon1.css">
</head>
<body>

<!-- The Difficulty Selector -->
<div id ="difficulty">
	<p>Select a Difficulty Level</p>
	<label><input type="radio" name="diff" id="Easy" value="Easy" checked>Easy</label>
	<label><input type="radio" name="diff" id="Normal" value="Normal">Normal</label>
	<label><input type="radio" name="diff" id="Hard" value="Hard">Hard</label>
	<label><input type="radio" name="diff" id="Impossible" value="Impossible">Impossible</label>
	<label><input type="radio" name="diff" id="Esteem" value="Esteem">Self-Esteem Destroying</label>
</div>

<!-- The Win Streak Counter -->
<div id="streak">Your Current Winning Streak Is: <div id ="score">0</div></div>

<!-- The Buttons Themselves -->
<div id = "buttons">
	<div id = "red"></div>
	<div id = "orange"></div>
	<div id = "green"></div>
	<div id = "blue"></div>
</div>
	<div id = "start"><div id ="command">Start</div></div>

<!-- JavaScript starts here -->
<script src = "/js/jquery.js"></script>
<script src = "/js/jqueryrotate.js"></script>
<script>
"Use Strict";

(function() {

// Necessary Global Variables
	var correct = [];
	var attempt = [];
	var chain = [];
	var audio1 = new Audio('note1.wav');
	var audio2 = new Audio('wrong.wav');

// Red Button

	// Animation
	function red() {
		$("#red").animate({
			opacity: 1
		}, 500).animate({
			opacity: 0.5
		}, 500);
	};

	// Click
	$("#red").click(function(){
		red();
		attempt.push(1);
		check();
	});

// Orange Button

	// Animation
	function orange() {
		$("#orange").animate({
			opacity: 1
		}, 500).animate({
			opacity: 0.5
		}, 500);
	};

	// Click
	$("#orange").click(function() {
		orange();
		attempt.push(2);
		check();
	});
	
// Green button

	// Animation
	function green() {
		$("#green").animate({
			opacity: 1
		}, 500).animate({
			opacity: 0.5
		}, 500);
	};

	// Click
	$("#green").click(function() {
		green();
		attempt.push(3);
		check();
	});

// Blue button

	// Animation
	function blue() {
		$("#blue").animate({
			opacity: 1
		}, 500).animate({
			opacity: 0.5
		}, 500);
	};

	// Click
	$("#blue").click(function() {
		blue();
		attempt.push(4);
		check();
	});

// To color the buttons
	function color() {
		$("#red").css("background-color", "#CC0000");
		$("#orange").css("background-color", "orange");
		$("#green").css("background-color", "green");
		$("#blue").css("background-color", "blue");
	};

// To gray out the buttons
	function gray() {
		$("#red").css("background-color", "gray");
		$("#orange").css("background-color", "gray");
		$("#green").css("background-color", "gray");
		$("#blue").css("background-color", "gray");
	};

// Start Button/Difficulty Setting

	// Click
	$("#start").click(function start() {
		var count = 0;
		var interval = 1000;
		correct = [];
		attempt = [];

	// Difficulty
		if ($("#Easy").is(':checked')) {
			var max = 5;
			color();
		} else if ($("#Normal").is(':checked')) {
			var max = 7;
			color();
		} else if ($("#Hard").is(':checked')) {
			var max = 8;
			color();
		} else if ($("#Impossible").is(':checked')) {
			var max = 12;
			gray();
		} else if ($("#Esteem").is(':checked')) {
			var max = 15;
			color();
		}

	// Animation
		var go = setInterval(function() {

			$("#command").html("Watch");
			$("#start").css("background-color", "red");
			$("#start").css("padding-left", "54px");
			$("#start").css("padding-right", "54px");
			

			if (count >= max) {
				$("#command").html("Guess")
				$("#start").css("padding-left", "55.5px");
				$("#start").css("padding-right", "55.5px");
				$("#start").css("background-color", "green");
				clearInterval(go);

			} else {
				game();
				
				$("#start").rotate({
					angle: 0,
					animateTo: 720
				});

				count++
			};
		}, 1000);

	});

// Score/Difficulty Scaling
	function streak() {
		chain.push(1);
		$("#score").html(chain.length);
		if(chain.length == 4) {
			$("#Normal").prop("checked", true);
		} else if (chain.length == 7) {
			$("#Hard").prop("checked", true);
		} else if (chain.length == 8) {
			$("#Impossible").prop("checked", true);
		}
	};

// Results

	// Do you have enough inputs?
	function check() {
		if(attempt.length == correct.length) {
			gameplay();
		}
		if($("#Esteem").is(':checked')) {
			var rand = (Math.floor(Math.random()* 15));
			var insulter = ["Your mother never loved you", "Come on! I even let you see the colors on this one!", "*Inhales with condescending fake concern through teeth*", "Are you sure that was the right one?", "hashtagbadatthisgame", "*Shields eyes from the horror that is your answer*", "Hey, I saw your friends at the movies yesterday. Oh, wait. You don't have any.", "That's ok. There's a participation award, too.", "You know what's sad? You'll probably have all the insults I programmed memorized before you beat this level.", "*Makes a condescending low groan as you click your answer*", "You must have been too busy contemplating your status as a speck of dust in the great cosmic wind to pay attention to the color pattern.", "HAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHA!..............*clears throat*", "You aren't worth the array I had to write for this.", "Wrong.", "You make me more nauseous than the Star Wars Prequels."];
			alert(insulter[rand]);
		}
	};

	// Determines the Results
	function gameplay() {
		if (attempt.join("|") == correct.join("|")) {
			$("#start").css("background-color", "gold");
			$("#start").css("padding-left", "52px");
			$("#start").css("padding-right", "52px");
			$("#command").html("Correct");
			streak();
			audio1.play();
		} else {
			$("#start").attr("Id", "lose");
			$("#command").html("Try Again?");
			$("#lose").css("background-color", "brown");
			$("#lose").css("padding-top", "60px");
			$("#lose").css("padding-left", "40px");
			$("#lose").css("padding-right", "40px");
			audio2.play();
			$("#lose").click(function() {
				location.reload(true);					
			});
		}
	};

// The Game Itself
	function game() {
		var random = (Math.floor(Math.random()* 4)+1);
		correct.push(random);

		if (random == 1) {
			red();
		} else if (random == 2) {
			orange();
		} else if (random == 3) {
			green();
		} else if (random == 4) {
			blue();
			
		}
	};

})();
</script>
</body>
</html>