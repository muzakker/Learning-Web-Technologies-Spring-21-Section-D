<?php

	$num1 = 15;
	$num2 = 20;
	$num3 = -21;
	
	if($num1 > $num2 && $num1 > $num3){
		echo $num1." is the largest number amongst ".$num1.", ".$num2." and ".$num3;
	}
	else if($num2 > $num1 && $num2 > $num3){
		echo $num2." is the largest number amongst ".$num1.", ".$num2." and ".$num3;
	}
	else{
		echo $num3." is the largest number amongst ".$num1.", ".$num2." and ".$num3;
	}
	
?>