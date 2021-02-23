<?php
	
	if(isset($_POST['submit']))
	{
		$currentPass = $_POST['currentPass'];
		$newPass = $_POST['newPass'];
		$rePass = $_POST['rePass'];

		if($currentPass === $newPass){
			echo "New Password should not be same as the Current Password";
		}
		if($newPass != $rePass)){
			echo "Passwords don't match!! Please Try Again.";
		}
	}
	
?>