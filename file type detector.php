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

	if (isset($_GET['submit'])) {
		$post_image = $_GET['image'];
		//echo $post_image;


		$name_to_detect = (explode('.', $post_image));
		$a = array_pop($name_to_detect);

		echo "Your file is a " . $a . " file";
		
	}



	?>
	<form action="" method="get">
		<input type="file" name="image">
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>