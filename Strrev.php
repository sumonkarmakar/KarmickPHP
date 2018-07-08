<!--Reverse a string using function-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<?php  
function reverse($number)  
{  
   /* writes number into string. */  
    $num = (string) $number;  
    /* Reverse the string. */  
    $revstr = strrev($num);  
    /* writes string into int. */  
    $reverse = (int) $revstr;   
     return $reverse;  
}  
 echo reverse(23456);  
?>  
</html>