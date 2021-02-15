<?php

	$elements = [
				[1, 2, 3, 'A'],
				[1, 2, 'B', 'C'],
				[1, 'D', 'E', 'F']
			];
	
	$elements_no = count($elements);
	
	for($row = 0; $row < $elements_no; $row++){
		$row_elements = count($elements[$row]);
		for($col = 0; $col < $row_elements; $col++){
			if($elements[$row][$col] >= 'A' && $elements[$row][$col] <= 'Z'){
				break;
			}
			echo $elements[$row][$col];
		}
		echo "<br>";
	}
	
	echo "<br>";
	
	for($row = 0; $row < $elements_no; $row++){
		$row_elements = count($elements[$row]);
		for($col = 0; $col < $row_elements; $col++){
			if($elements[$row][$col] >= 'A' && $elements[$row][$col] <= 'Z'){
				echo $elements[$row][$col];
			}
		}
		echo "<br>";
	}
	
?>