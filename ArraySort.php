<!DOCTYPE html>
<html>
	<head>
		<title>Sort of Array</title>
	</head>
	<body>
		<?php 
			$season = array("summer","winter","spring","autumn");
			sort($season);
			foreach ($season as $s) {
				# code...
				echo "$s<br/>";
			}
		 ?>
	</body>
</html>