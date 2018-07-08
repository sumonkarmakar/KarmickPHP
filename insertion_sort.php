<!DOCTYPE html>
<html>
	<head>
		<title>Insertion Sort</title>
	</head>
	<body>
	<?php 
		function i_Sort($m_array){
			for($i=0;$i<count($m_array);$i++){
				$val = $m_array[$i];
				$j = $i-1;
				while($j>=0 && $m_array[$j]>$val){
					$m_array[$j+1]=$m_array[$j];
					$j--;
				}
				$m_array[$j+1]=$val;
			}
			return $m_array;
		}
		$test_array = array(3,0,2,5,-1,4,1);
		echo "Original Array :\n";
		echo implode(',', $test_array);
		echo "<br/>";
		echo "\nSorted Array :\n";
		print_r(i_Sort($test_array));
	 ?>
	</body>
</html>