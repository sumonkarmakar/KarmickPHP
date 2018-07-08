<!DOCTYPE html>
<html>
<head>
	<title>Star Pattern 6</title>
</head>
<body>
<?php 
	for($row=1;$row<=5;$row++){
		for($col=1;$col<=($row > 3?6-$row:$row);$col++){
			echo '* ';
		}
		echo "</br>";
	}
 ?>
</body>
</html>