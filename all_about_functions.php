<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
	<style type="text/css">
		body, h1, p, h3 {
			padding: 0;
			margin: 0;
		}
	</style>
</head>
<body>


	<h1>Rules for function:</h1>
	<p>1. Function name can not start with number.</p>
	<p>2. Can only contain underscore, letters and numbers.</p>
	<p>4. Function can not be the same as built in functions.</p>
	<p>5. Try not to start a function with double underscore.</p>
	<p>Function name in NOT case-sensitive</p>
	<hr>



	<?php 

	function func_name() { // ($argument) always is variable, sometime it can be $argument = "value", "Value";

		//PHP Statements.
		echo "function value is:";
		// /return "string";
	}
	// func_name(); Calling a function
	var_dump(func_name());
	echo "<hr>";



	echo "<hr><hr><h1>Can you emptpy a variable using a function:</h1><br>";

	function set_empty($argument1, &$argument2) { // always use & in defining here.
		// pass by value, pass by refarence
		$argument1 = null;
		$argument2 = null;
	}
		$string1 = "Not empty";
		$string2 = "Not empty";
		set_empty($string1, $string2);
		var_dump($string1);
		echo "<br>";
		var_dump($string2);
	echo "<hr>";



	echo "<hr><hr><h3>Global keyword:</h3><br>";
		$var2 = "not global";
		function func() {
			global $var2;
			echo $var2;

		}
		func();
	echo "<hr>";



	echo "<hr><hr><h3>Argument with default values:</h3><br>";
	echo "<hr><hr><p>Argument with default values must be put behind the argument WITH values:</p><br>";
		function car($engine, $wheel=4) { /// $wheel = 4, $engine is the wrong way
			echo $engine . " Engine with " . $wheel . " wheels.<br>";
		}
		car("V8");


		car("Diesel",6);
		car("Diesel",10);
	echo "<hr>";

	echo "<hr><hr><h3>Creating CONSTANT:</h3><br>";
	//echo "<hr><hr><p>Argument with default values must be put behind the argument WITH values:</p><br>";
		
		//define(name, value, case-insensitive);
		//define(string $name, mixed $ualue [, bool $case-insensitive= false]);

	define('constant_name', 'constant string');
	define('constantName', 'constant string', true);

	var_dump(constant_name);
	var_dump(constantnamE);
	echo "<hr>";


	?>
</body>
</html>