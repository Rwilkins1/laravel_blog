<!DOCTYPE html>
<html>
<head>
	<title>JS Calculator</title>
	<link rel="stylesheet" href="/CSS/calculator.css">
</head>
<body>
	
<div id = "calculator">
	<div id = "spaces">
		<div id = "instrument">
			Wilkins Instruments BF-0150
		</div>
		<form id = "operation" action = "calculator.html">

				<!-- Numbers go here -->
				<label for "area"></label>
				<textarea id ="area" name = "area" type = "text" cols = 20 readonly></textarea>

		</form>
	</div>
	<div id = "buttons">

		<!-- First Row of Buttons-->
			<a class = "num" data-val = "1">1</a>
			<a class = "num" data-val = "2">2</a>
			<a class = "num" data-val = "3">3</a>
			<a class = "num" data-val = ".">.</a>
			<br><br><br>
		<!-- Second Row of Buttons-->
			<a class = "num" data-val = "4">4</a>
			<a class = "num" data-val = "5">5</a>
			<a class = "num" data-val = "6">6</a>
			<a class = "num" data-val = "+/-">-</a>
			<br><br><br>
		<!-- Third Row of Buttons-->
			<a class = "num" data-val = "7">7</a>
			<a class = "num" data-val = "8">8</a>
			<a class = "num" data-val = "9">9</a>
			<a class = "num" data-val = "0">0</a>
			<br><br><br>
		 <!-- Fourth Row of Buttons-->
			<a id = "C" data-clear = "C">C</a>
			<a class = "num" data-val = "π">π</a>
			<a class = "num" id = "misc2" data-val = "2π">2π</a>
			<a class = "num" id = "misc2" data-val = "4π">4π</a>
			<br><br><br>
		<!-- Fifth Row of Buttons-->
			<a class = "op" data-val = "+">+</a>
			<a class = "op" data-val = "-">-</a>
			<a class = "op" id = "misc" data-val = "*">*</a>
			<a class = "op" id = "misc4" data-val = "/">/</a>
			<br><br><br>
		<!-- Sixth Row of Buttons -->
			<a class = "op" data-val = "squared">^</a>
			<a class = "op" data-val = "root">√</a>
			<a class = "op" id = "misc3" data-val = "abs">abs</a>
			<a class = "op" id = "misc3" data-val = "log">log</a>
			<br><br><br>
		<!-- Seventh Row of Buttons -->
			<a class = "op" id = "misc3" data-val = "sin">sin</a>
			<a class = "op" id = "misc3" data-val = "cos">cos</a>
			<a class = "op" id = "misc3" data-val = "tan">tan</a>
			<a id = "eq" data-equals = "=">=</a>
			

	</div>
</div>

<script>
"use strict";
(function() {

	var button = document.getElementsByTagName("a");
	var inputarea = document.forms.operation.area;
	var leftside = [];
	var operatorarray = [];
	var rightside = [];

	// ALL numbers go in here!!!//
	var number = function(event) {
		var value = this.innerHTML;
		
		//Starts the right-side input when operators are used.
	 	
	 	inputarea.innerHTML += value;
	 	

	 	// Makes the various Pi applications work
	 	if (value == "π") {
	 		inputarea.innerHTML = Math.PI;
	 	} 

	 	if (value == "2π") {
	 		inputarea.innerHTML = 2 * Math.PI;
	 	} 

	 	if (value == "4π") {
	 		inputarea.innerHTML = 4 * Math.PI;
	 	} 
	}

	//ALL operators go in here!!!//
	var operator = function(event) {
		leftside.push(inputarea.innerHTML);
		console.log(leftside);
		var value = this.innerHTML;
		inputarea.innerHTML = value;
		operatorarray.push(this.innerHTML);
		console.log(operatorarray);
		clearinput();
	}

	var clearinput = function() {
		inputarea.innerHTML = "";
	}

	// This is the clear button!!!//
	var clear = function(event) {
		location.reload(true);
	}

	// This does the calculation!!!//
	var result = function(event) {
		rightside.push(inputarea.innerHTML);
		var left = leftside[0];
		var right = rightside[0];
		var operator = operatorarray[0];

		if (operator == "/") {
			inputarea.innerHTML = (left/right);
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "*") {
			inputarea.innerHTML = (left * right);
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "+") {
			inputarea.innerHTML = (parseInt(left) + parseInt(right));
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "-") {
			inputarea.innerHTML = (left - right);
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "^") {
			inputarea.innerHTML = (Math.pow(left, right));
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "√") {
			inputarea.innerHTML = (Math.sqrt(left));
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "cos") {
			inputarea.innerHTML = (Math.cos(right));
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "sin") {
			inputarea.innerHTML = (Math.sin(right));
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "tan") {
			inputarea.innerHTML = (Math.sin(right));
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "abs") {
			inputarea.innerHTML = (Math.abs(left));
			leftside = [];
			operatorarray = [];
			rightside = [];
		} else if (operator == "log") {
			inputarea.innerHTML = (Math.log(left));
			leftside = [];
			operatorarray = [];
			rightside = [];
		}
	}

	// makes the number buttons work//
	var buttons = document.getElementsByClassName("num");
	
	for (var i = 0; i < buttons.length; i++) {
		buttons[i].addEventListener('click', number, false);
	}

	//makes the operator buttons work//
	var operations = document.getElementsByClassName("op");

	for (var i = 0; i < operations.length; i++) {
		operations[i].addEventListener('click', operator, false);
	}

	// makes the clear button work//
	document.getElementById("C").addEventListener('click', clear, false);
	
	//makes the equals button work//
	document.getElementById("eq").addEventListener('click', result, false);
})();
</script>
</body>
</html>