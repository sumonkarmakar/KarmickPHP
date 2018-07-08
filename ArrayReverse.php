<!DOCTYPE html>
<html>
	<head>
		<title>Reverse an array</title>
	</head>
	<body>
	<?php 
			$season = array("Summer","Winter","Autumn","Spring");
			$reverseseason=array_reverse($season);
			foreach ($reverseseason as $s) {
				# code...
				echo "$s<br/>";
			}
	 ?>
	</body>
</html>