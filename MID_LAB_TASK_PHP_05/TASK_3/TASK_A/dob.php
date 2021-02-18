<?php

	if(isset($_POST['submit'])){
		$day = $_POST['dd'];
		$month = $_POST['mm'];
		$year = $_POST['yyyy'];
		
		if($day == "" || $month == "" || $year == ""){
			echo "null submission...";
		}else if(($day > 0 && $day <= 31) && ($month > 0 && $day <= 12) && ($year => 1900 && $year <= 2021)){
			echo "<b>DATE OF BIRTH: </b>".$day." / ".$month." / ".$year;
		}else{
			echo "Please put a valid date (i.e., dd: 1-31, mm: 1-12, yyyy: 1900-2021)";
		}
	}else{
		echo "invalid submission";
	}

?>