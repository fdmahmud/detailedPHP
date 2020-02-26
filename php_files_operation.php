<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body, h1, p, h3 {
			padding: 0;
			margin: 0;
		}
	</style>
</head>
<body>
	<?php

	echo "<hr><hr><h3>Sending data between files</h3><br>";
		echo "<p>1. require() :</p><br>";
			?>

			<p>This will give you a FETAL error. The whole program will shut down</p>

			<?php
		echo "<p>1. include() :</p><br>";
		echo "<p> include() function just gives WARNING. rest of the program will contimue</p>.";

		echo "<p>1. require_once('./filename') :</p><br>";
		echo "<p>1. this wont consume system resource :</p><br>";
		
			
	echo "<hr>";



	echo "<hr><hr><h3>String and array convartion</h3><br>";
		echo "<p>1. implode()  Array ==> String :</p><br>";
			$arrayName = array(1,2,3,4,5,6);
			$glue = ", ";
			var_dump(implode($glue, $arrayName));
		echo "<hr>";


		echo "<p>1. explode(delimiter, string) String ==> Array :</p><br>";
			$v = "Amar sonar bangla ami tomai valobasi. Ciro din tomar akash tomar bayash amar prane, o ma amar prane jai bashi";
			var_dump(explode(" ", $v));
			echo "<br>";
			var_dump(explode(" ", $v,3));
			echo "<br>";
			var_dump(explode(" ", $v, -10));
		echo "<hr>";


		echo "<p>1. str_split(string) String ==> Array :</p><br>";
			$ass = "abcdefghijklmnopqrstuvwxyz";
			var_dump(str_split($ass));
			echo "<br>";
			var_dump(str_split($ass,5));
		echo "<hr>";


		echo "<p>1. substr(string, start) cuts a part of the string:</p><br>";
			$ass = "123456789";
			var_dump(substr($ass, 6)); // 789
			echo "<br>";
			var_dump(substr($ass, 6, 2)); // 78
			echo "<br>";
			var_dump(substr($ass, -3)); // 789
			echo "<br>";
			var_dump(substr($ass, -3, 1)); // 789
		echo "<hr>";

		echo "<p>1. str_replace(search, replace, subject) replaces string:</p><br>";
			$ass = "aaa0bbb0ccc0ddd";
			var_dump(str_replace(0, 'zero', $ass, $counter)); // aaazerobbbzeroccczeroddd
			echo "<br>";
			echo $counter; // 3 zero have been replaced
			//var_dump(substr($ass, 6, 2)); // 78
			echo "<br>";
			//var_dump(substr($ass, -3)); // 789
			echo "<br>";
			//var_dump(substr($ass, -3, 1)); // 789
		echo "<hr>";
			
			
	echo "<hr>";


	?>

</body>
</html>