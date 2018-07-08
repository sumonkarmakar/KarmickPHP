<!DOCTYPE html>
<html>
	<head>
		<title>Quick Sort</title>
	</head>
	<body>
	<?php 
		function q_sort($m_array){
			$loe=$gt=array();
			if(count($m_array)<2){
				return $m_array;
			}
			$pivot_key = key($m_array);
			$pivot = array_shift($m_array);
			foreach ($m_array as $val) {
				if($val<=$pivot){
					$loe[] = $val;
				}elseif($val>$pivot){
					$gt[] = $val;
				}
			}
			return array_merge(q_sort($loe),array($pivot_key=>$pivot),q_sort($gt));
		}
		$m_array = array(3,0,2,5,-1,4,1);
		echo 'Original Array : '.implode(',', $m_array).'\n';
		$m_array = q_sort($m_array);
		echo 'Sorted Array : '.implode(',', $m_array);
	 ?>
	</body>
</html>