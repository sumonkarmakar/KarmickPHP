<!DOCTYPE html>
<html>
<head>
	<title>Star Triangle</title>
</head>
<body>
<?php 
	for($a=5;$a>=1;$a--){
		if($a%2!=0){
			for($b=5;$b>=$a;$b--){
				echo "* ";
			}
			echo "<br>";
		}
	}
	for($a=2;$a<=5;$a++){
		if($a%2!=0){
			for($b=5;$b>=$a;$b--){
				echo "* ";
			}
			echo "<br>";
		}
	}
 ?>
</body>
</html>