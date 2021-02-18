<?php

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		
		if($email == ""){
			echo "null submission...";
		}else{
			echo "<b>Email: </b>".$email;
		}
	}else{
		echo "invalid submission";
	}

?>