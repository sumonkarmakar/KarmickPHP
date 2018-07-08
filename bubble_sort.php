<!--Bubble Sort-->
<!DOCTYPE html>
<html>
	<head>
		<title>Bubble Sort</title>
	</head>
	<body>
		<?php 
			$numbers = array(1,3,2,5,2);
			$array_size = count($numbers);

			echo "Numbers before sort: ";
			for($i=0;$i<$array_size;$i++)
				echo $numbers[$i];
			/*echo "n";*/

			for($i=0;$i<$array_size;$i++){
				for($j=0;$j<$array_size;$j++){
					if($numbers[$i]<$numbers[$j])
					{
						$temp = $numbers[$i];
						$numbers[$i] = $numbers[$j];
						$numbers[$j] = $temp;
					}
				}
			}
			echo "<br/>";
			echo "\nNumbers after sort: ";
			for($i=0;$i<$array_size;$i++)
				echo $numbers[$i];
			/*echo "n";*/
		 ?>
	</body>
</html>