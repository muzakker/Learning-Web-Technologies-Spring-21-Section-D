<?php

	$randElements = [1, 'num', 'fruit', 4, 'banana', "hello", 7, 88, 9, 10];
	$key = 'hello';
	$isFound = false;
	$atIndex = 0;
	for($itr = 0; $itr < count($randElements); $itr++){
		if($key === $randElements[$itr]){
			$isFound = true;
			$atIndex = $itr;
		}
	}
	if($isFound == true){
		echo "The Element is Found at index ".$atIndex.".";
	}else{
		echo "The Element is NOT Found in the array.";
	}

?>