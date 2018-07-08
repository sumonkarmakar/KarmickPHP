<!DOCTYPE html>
<html>
	<head>
		<title>Array Exaample</title>
	</head>
	<body>
		<?php 
			$cars = array(
				array("Volvo",22,18),
				array("BMW",15,13),
				array("Audi",5,2),
				array("Mercedes",70,100)
				);

			for($row=0;$row<4;$row++){
				echo "<p><b>Row Number $row</b></p>";
				echo "<ul>";
				for($col=0;$col<3;$col++){
					echo "<li>".$cars[$row][$col]."</li>";
				}
				echo "</ul>";
			}
		 ?>
	</body>
</html>