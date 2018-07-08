<!--Matrix Multiplication-->
<!DOCTYPE html>
<html>
	<head>
		<title>Matrix Multiplication</title>
	</head>
	<body>
		<?php 
			$a = array(array(1,2),array(4,5));
			$b = array(array(7,5),array(3,2));

			$r = count($a);
			$c = count($b[0]);
			$p = count($b);

			if(count($a[0])!=$p){
				echo "Incompatible matrices";
				exit(0);
			}
			$result=array();
			for($i=0;$i<$r;$i++){
				for($j=0;$j<$c;$j++){
					$result[$i][$j] = 0;
					for($k=0;$k<$p;$k++){
						$result[$i][$j]+=$a[$i][$k] * $b[$k][$j];
					}
				}
			}
			print_r($result);
		 ?>
	</body>
</html>