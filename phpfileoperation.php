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

	echo "<hr><hr><p>Array inside array:</p><br>";
		echo "fopen(filename, mode)"; // filename and the url, mode, 
		echo "<p>variable handle = @fopen(filename, mode) or die('error');</p><p>it can not creates file</p>"; //modes are r, r+, w, w+, (a,x,c)+
		echo "<p>r and r+ mode writes abc 123456 file to abc456</p>";
		echo "<p>w,w+ totally rewrites the file</p>";
		echo "<p>a,a+ mode 12345abc</p>";
		echo "<p>@sign will prevent showing error repost</p>";
		echo "<p>fclose(variable handle)</p>";
		echo "<br>";

		// $handle = @fopen("./texta.txt", "r") or die("wrong mode"); 
		// var_dump($handle);
		// fclose($handle);

		echo "<br>";
	echo "<hr>";
		echo "fread(handle, length)"; // filename and the url, mode, 
		$handle = @fopen("./text.txt", "r") or die("wrong mode"); 
		$string = fread($handle, 1024);
		fclose($handle);
		echo "<br>" . $string . "<br>";

		echo "fgets(handle)"; // filename and the url, mode, 
		$handle = @fopen("./text.txt", "r") or die("wrong mode"); 
		
		$string = fgets($handle);
		fclose($handle);
		echo "<br>" . $string;

		// $handle = fopen("./text.txt", "a");
		// var_dump($handle);
		// fclose($handle);
		// echo "<br>";
		// $handle = fopen("./new.txt", "w");
		// var_dump($handle);
		// fclose($handle);

		// fread(handle, length);
		// fwrite(handle, string);

	echo "<hr>";


	?>

</body>
</html>