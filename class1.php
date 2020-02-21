<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
 		
$a = "something";
$b = "nothing";
 		echo $a . " " . $b . "<br>";


$a = "something";
 $b = "nothing";
 		$a = $b;
 		echo $a . " " . $b . "<br>";


$a = "something";
$b = "nothing";

 		$a = &$b; 	// !!!!!!!!!!!!!!!!!!  Assign by reference   !!!!!!!!!!!!!!!

 		echo $a . " " . $b . "<br>";

$a = "good Thing";

 		echo $a . " " . $b . "<br>"; //result: "good Thing good Thing"

 $b = "not good thing";
 		echo $a . " " . $b . "<br>"; //result: "not good thing not good thing"


	?>
</body>
</html>