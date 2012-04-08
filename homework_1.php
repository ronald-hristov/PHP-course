<html>
<head>
<title>Homework 1</title>
<style>
.red {color:red;}
.blue {color:blue;}
</style>
</head>
<body>
<?php
function prime(){		
	echo '<h1>';
	printf ('The number %d is prime !', $_GET["number"]);
	echo '</h1>';
}
function notprime(){		
	echo '<h1 class="blue">';
	printf ('The number %d is NOT prime !', $_GET["number"]);
	echo '</h1>';
}
function simple($input){
	if($input<3){ 	
		prime();
}
	for($i=2; $i<$input; $i++){
		if($input%$i==0){ 
			notprime();
			break;}
		if($i==$input-1){ 
		prime();			
		}
	}
}
if (!is_numeric($_GET["number"])){
	echo '<h1 class="red">The parameter is not a number</h1>';}
	elseif (!($_GET["number"]>=0 AND $_GET["number"]<=19999)){
		echo '<h1 class="red">The parameter is not within the range [0,19999]</h1>';		
	}
else simple($_GET["number"]);
?>


</body>

</html>