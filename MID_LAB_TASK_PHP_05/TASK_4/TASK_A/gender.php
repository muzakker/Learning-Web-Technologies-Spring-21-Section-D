<?php

	if(isset($_POST['submit'])){
		$gender = $_POST['gender'];
		
		if($gender == ""){
			echo "null submission...";
		}else{
			echo "<b>GENDER: </b>".$gender;
		}
	}else{
		echo "invalid submission";
	}

?>