<!DOCTYPE html>
<html>
	<head>
		<title>Array Intersect Function</title>
	</head>
	<body>
		<?php 
			$name1 = array("sonoo","john","vivek","smmith");
			$name2 = array("umesh","sonoo","kartick","smmith");
			$name3 = array_intersect($name1, $name2);
			foreach ($name3 as $n) {
				# code...
				echo "$n<br/>";
			}
    	 ?>
	</body>
</html>