<!DOCTYPE html>
<html>
	<head>
		<title>Single Quoted PHP String</title>
	</head>
	<body>
		<?php 
			$str1 = 'Hello text 
			multiple line
			text within single quoted string';
			$str2 = 'Using double "quote" directly inside single quoted string';
			$str3 = 'Using escape sequences \n in single quoted String';
			echo "$str1 <br/> $str2 <br/> $str3";
		 ?>
	</body>
</html>