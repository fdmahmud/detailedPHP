<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
	<style type="text/css">
		body, h1, p, h3 {
			//padding: 0;
			margin: 0;
			padding-right: 40px;
		}
	</style>
</head>
<body>
	<?php 
	echo "<hr><hr><h3>Creating Array:</h3><br>";
	//echo "<hr><hr><p>Argument with default values must be put behind the argument WITH values:</p><br>";
		
		$array1 = [
				'index1'=> 2,
				'index2'=> 4,
				'index3'=> 6,
				'index4'=> 8,
				];
		$array2 = array('name1', 2,4,6);


		var_dump($array2);
		echo "<br>";
		$array2[0] = 'ferdous';
		var_dump($array2);
		echo "<br>";
		$array2 = array(1,2,3,4);
		var_dump($array2);


		echo "<br>" . $array1['index4'];


	echo "<hr><hr><p>Array inside array:</p><br>";
		$multidiarray = array(1,3,5,[2,4,6,[10,20,30,[100,200,300,[1000,2000,3000]]]]);
		var_dump($multidiarray);
		echo "<br>";
 
		function array_split($array) {
			foreach ($array as $index => $value) {
				if (is_array($value)) {
					array_split($value);
				} else {
					echo $index . "-->" . $value . "<br>";
				}
			}
		}
		array_split($multidiarray);
		//echo $multidiarray[2(2)];

	echo "<hr>";

	echo "<hr><hr><h3>Foreach loop:</h3><br>";
	echo "<p>foreach works as a splitter</p><br>";
		$array3 = [1,2,3,4,5,6,7,8];

		foreach ($array3 as $value) {
			echo $value . "<br>";
		}

		foreach ($array1 as $key => $value) {
			echo $key . "--" . $value . "<br>";
		}
		

	echo "<hr>";

	echo "<hr><hr><h3>Built in array functions:</h3><br>";
		echo "<p>count() :</p><br>";
				echo count($array3);
		echo "<p>is_array() :</p><br>";
				var_dump(is_array($array3));
		echo "<p>is_array() :</p><br>"; // in_array($value, $array[,$bool=false]);
				var_dump(in_array('1', $array3, true));
				var_dump(in_array('1', $array3));
				var_dump(in_array(9, $array3));
	echo "<hr>";



	echo "<hr><hr><h3>Array combine and marge:</h3><br>";
		echo "<p>array_combine(keys, values) :</p><br>";
			$a = [1,2,3,4];
			$b = ['a','b','c','d'];
			var_dump(array_combine($b, $a)); //array(4) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) ["d"]=> int(4) }


		echo "<p>array_merge(keys, values) :</p><br>";
				var_dump(array_merge($a,$b)); 
			//array(8) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> string(1) "a" [5]=> string(1) "b" [6]=> string(1) "c" [7]=> string(1) "d" }
	echo "<hr>";




	echo "<hr><hr><h3>Array Shift and Pop:</h3><br>";
		echo "<p>array_shift(array) : Shows the first array</p><br>";
			var_dump(array_shift($b)); // Shows the first array element

		echo "<p>array_pop(array) Shows the last array element :</p><br>";
				var_dump(array_pop($b));  // Shows the last array element
	echo "<hr>";


	
	echo "<hr><hr><h3>Callback or Callable. Function that calls a function:</h3><br>";
		echo "<p>call_user_func(function) : Shows the first array</p><br>";

			function car($engine, $wheel=4) { /// $wheel = 4, $engine is the wrong way
				echo $engine . " Engine with " . $wheel . " wheels.<br>";
			}
			call_user_func('car','Inline 6', 12);

	echo "<p>array_walk(array, funcname) : Shows the first array</p><br>";
			$arr = ['Toyota'=>'Corolla', 'Honda'=>'Civic'];

			function car2($model, $brand, $remark) { // $array value, $index value, $optional value. And should not be more than 3 argument.
				echo "The ". $model . " by ". $brand . " is " . $remark . "<br>";
			}
			array_walk($arr, 'car2', 'not bad.');


	echo "<hr>";

	?>
</body>
</html>