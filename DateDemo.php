<!DOCTYPE html>
<html>
	<head>
		<title>Date Demo</title>
	</head>
	<body>
		<?php 
			$d = mktime(11,14,54,8,12,2018);
			echo "Created date is " . date("Y-m-d h:m:sa",$d);
		 ?>
	</body>
</html>