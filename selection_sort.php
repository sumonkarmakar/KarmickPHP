<!DOCTYPE html>
<html>
	<head>
		<title>Selection Sort</title>
	</head>
	<body>
		<?php 
			function s_sort($data){
				for($i=0;$i<count($data)-1;$i++){
					$min = $i;
					for($j=$i+1;$j<count($data);$j++){
						if($data[$j]<$data[$min]){
							$min = $j;
						}
					}
					$data = swap_positions($data,$i,$min);
				}
				return $data;
			}

			function swap_positions($data1,$left,$right){
				$temp = $data1[$right];
				$data1[$right] = $data1[$left];
				$data1[$left] = $temp;
				return $data1;
			} 

			$m_array = array(3,2,0,5,-1,4,1);
			echo "Original Array :\n";
			echo implode(',',$m_array);
			echo "\nSorted Array :\n";
			echo implode(',',s_sort($m_array)).PHP_EOL;
		 ?>
	</body>
</html>