<?php

	$elements = [
					[1, 2, 3, 'A'],
					[1, 2, 'B', 'C'],
					[1, 'D', 'E', 'F']
				];
	$elements_num = count($elements);
	
	for($row = $elements_num; $row > 0; $row--){
		for($col = $row; $col > 0; $col--){
			echo $elements[$row][$col];
		}
	}
	
?>
