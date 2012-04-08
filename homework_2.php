<html>
<head>
<title>Homework 2</title>
</head>
<body>
<?php
$arr = range (20, 1000, 37);
function prime_check($var){
	for($i=2; $i<$var; $i++){
		if($var%$i==0){ 
			return FALSE;
			break;}
		if($i==$var-1){ 
			return TRUE;			
		}
	}
}

function find_3_prime($ar){
	$count=0;
	foreach ( $ar as $value) { 
		$a=$value;
		if(prime_check($value)) $count++;
		if ($count==3) break;
	}
	return $a;
}
function check_exists($ar){
	$lil_arr = array(146, 284, 871);
	foreach ( $lil_arr as $value) { 
		if(in_array($value, $ar)) {
			printf("The number %d exist in the array.", $value);
			echo " <br /> ";}
	else {
		printf("The number %d does not exist in the array.", $value);
		echo " <br /> ";
		}
	}
}

printf( "The third simple number in the array is %d. <br /> ", find_3_prime($arr) );
check_exists($arr);

?>

</body>

</html>

