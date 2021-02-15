<?php

	for($row = 0; $row < 3; $row++){
		for($col = 0; $col <= $row; $col++){
			echo "* ";
		}
		echo "<br>";
	}
	
	echo "<br>";
	
	for($row = 3; $row > 0; $row--){
		$num = 1;
		for($col = $row; $col > 0; $col--){
			echo $num++." ";
		}
		echo "<br>";
	}
	
	echo "<br>";
	
	$alpha = 'A';
	for($row = 0; $row < 3; $row++){
		for($col = 0; $col <= $row; $col++){
			echo $alpha++." ";
		}
		echo "<br>";
	}

?>