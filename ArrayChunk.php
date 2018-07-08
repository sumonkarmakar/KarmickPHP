<!DOCTYPE html>
<html>
	<head>
		<title>Array Chunk Example</title>
	</head>
	<body>
		<?php 
			$salary = array("Sonoo"=>"5500000","Vimal"=>"250000","Ratan"=>"2000000");
			print_r(array_chunk($salary, 2));
		 ?>
	</body>
</html>